<?php

namespace App\AdminModule\Presenters;

use App\Model\Listas;
use App\Model\Orm\Maquinas;
use App\Model\Orm\Piezas;

class PiezasPresenter extends BaseAdminPresenter
{

    /** @var $PiezaEditada Piezas */

    private $copiaEditada;

    /** @var $maquinaEditada Maquinas */

    private $maquinaEditada;

    // $mode 0 -> Todos los cambios
    // $mode 1 -> Cambios de X maquina definido por $idMaquina


    public function renderDefault($mode = 0, $idMaquina): void
    {
        $listas = new listas();
        $this->template->piezas = $listas->getPiezas();
        $this->template->mode = $mode;

        if ($mode == 0) {
            $this->template->cambios = $this->orm->cambios->findAll();
        } elseif ($mode == 1) {
            $this->template->cambios = $this->orm->maquinas->getById($idMaquina)->cambios;
        }
    }

    public function actionAdd($idMaquina)
    {
        $this->maquinaEditada = $this->orm->maquinas->getById($idMaquina);
        $this->template->maquina = $this->maquinaEditada;
    }
}
