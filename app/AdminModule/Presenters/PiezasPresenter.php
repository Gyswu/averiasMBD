<?php

namespace App\AdminModule\Presenters;

use App\Forms\PiezasFormFactory;
use App\Model\Listas;
use App\Model\Orm\Cambios;
use App\Model\Orm\Maquinas;
use App\Model\Orm\Piezas;
use Nette\Application\UI\Form;
use Nette\Application\UI\Multiplier;
use stdClass;

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
            $this->template->idMaquina = $idMaquina;
            $this->maquinaEditada = $this->orm->maquinas->getById($idMaquina);
            $this->template->cambios = $this->orm->maquinas->getById($idMaquina)->cambios;
        }
    }


    public function actionAdd($idMaquina)
    {
        $this->maquinaEditada = $this->orm->maquinas->getById($idMaquina);
        $this->template->maquina = $this->maquinaEditada;
        $this->template->idMaquina = $this->maquinaEditada->id;
    }

    public function createComponentAddCambioForm()
    {

            $form = (new PiezasFormFactory())->createNuevo($this->maquinaEditada->id);
            $form->onSuccess[] = [$this, 'onSuccessAddPiece'];
            return $form;

    }

    public function onSuccessAddPiece(Form $form, stdClass $values): void
    {
        $cambio = new Cambios();

        $cambio->pieza = $values->pieza;
        $cambio->causa = $values->causa;
        $cambio->fecha = $values->fecha;
        $cambio->origen = $values->origen;
        $cambio->copias = $values->copias;
        $cambio->tecnico = $this->getDbUser()->id;

        $maquina = $this->orm->maquinas->getById($values->idMaquina);
        $maquina->cambios->add($cambio);

        $this->orm->maquinas->persistAndFlush($maquina);

        $this->redirect('Maquinas:info', $values->idMaquina);

    }
}
