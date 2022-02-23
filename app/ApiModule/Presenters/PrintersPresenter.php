<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

use App\Model\Orm\Copias;
use DateTime;
use Nette\Utils\Json;

final class PrintersPresenter extends BaseApiPresenter
{

    /**
     * Return printer, will be matched always by api token set on database
     */
    private function getPrinter()
    {
        $data = $this->getPostData();
        $printer = $this->orm->maquinas->findByToken($data->token);
        if (!$printer) {
            $this->sendErrors("Invalid printer");
        }

        return $printer;
    }

    /**
     * Will update number of copies reported in the printer for given type
     * 
     * @param type {String} - type of report bn|color|lvl1-3|copies
     * @param total {Integer}
     * @param token {String}
     */
    public function actionUpdateReport()
    {
        $data = $this->getPostData();
        $printer = $this->getPrinter();
        $type = $data->type;

        $copia = $this->orm->copias->findLastByPrinterId($printer->id);

        //check past date (better using some library)
        $today = new DateTime("today");
        $diffDays = 0;
        if ($copia) {
            $date = DateTime::createFromFormat('d/m/Y', $copia->fecha)->setTime(0, 0, 0);
            $diff = $today->diff($date);
            $diffDays = (int)$diff->format("%R%a"); // Extract days count in interval
        }

        if (!$copia || $diffDays < 0) {
            $copia = new Copias();
            $copia->fecha = $today->format("d/m/Y");
            $copia->maquina = $printer;
            $copia->escaneos = 0;
        }

        //update only if given total is greater than previous (maybe is how to unprint pages in youtube xD)
        if (!is_numeric($data->total) || $data->total <= $copia->$type) {
            $this->sendErrors("You cannot unprint pages, total must be greater than the last one");
        }

        $copia->$type = $data->total;
        $this->orm->copias->persistAndFlush($copia);

        $this->sendJson(["status" => 1]);
    }

    public function actionCodegroups()
    {
        $printer = $this->getprinter();

        $this->sendJson(Json::decode($printer->codegroups));
    }

    /**
     * Gives printer info by token
     * Will return only fields set on $whitelist to prevent data leaks
     */
    public function actionInfo()
    {
        $printer = $this->getprinter();
        $info = $printer->toArray();
        $info["codegroups"] = Json::decode($printer->codegroups);

        $whitelist = ["id", "ip", "codegroups"];
        $this->sendJson(array_intersect_key($info, array_flip($whitelist)));
    }
}
