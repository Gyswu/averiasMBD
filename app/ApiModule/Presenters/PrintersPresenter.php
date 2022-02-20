<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

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

    public function actionCodegroups()
    {
        $printer = $this->getprinter();

        $this->sendJson(Json::decode($printer->codegroups));
    }
}
