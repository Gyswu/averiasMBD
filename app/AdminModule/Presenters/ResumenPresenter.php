<?php

namespace App\AdminModule\Presenters;

use App\Forms\AveriasFormFactory;
use App\Model\Orm\Averias;
use Exception;
use Nette\Application\UI\Form;
use Nextras\Orm\Collection\ICollection;
use Psr\Log\NullLogger;
use stdClass;

class ResumenPresenter extends BaseAdminPresenter
{

    public function renderDefault(): void
    {
        $datosMaquinas = array();
        $porcentajesMaquinas = array();
        $maquinas = $this->orm->maquinas->findAll();

        foreach ($maquinas as $maquina) {
            if ($maquina->modelo == "blank" || $maquina->modelo == "Pruebas") {

            } else {
                $r = array_push($datosMaquinas, $maquina->modelo);
            }
        }
        $pnt = 100 / count($datosMaquinas);
        foreach (array_count_values($datosMaquinas) as $dato){
            array_push($porcentajesMaquinas, str_replace(".", ",", $dato * $pnt));
        }

        $datosMaquinasCantidad = array_count_values($datosMaquinas);
        $this->template->datosMaquinasCantidad = $datosMaquinasCantidad;
        $this->template->datosMaquinasCantidadKey = array_keys($datosMaquinasCantidad);
        $this->template->datosMaquinasCantidadTotal = count($datosMaquinasCantidad);
        $this->template->datosMaquinasTotal = 100 / count($datosMaquinas);
        $this->template->porcentajeMaquinas = $porcentajesMaquinas;
        $this->template->borrar = "\.";

    }
}