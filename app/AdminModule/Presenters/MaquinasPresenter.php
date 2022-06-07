<?php

namespace App\AdminModule\Presenters;

use App\Forms\CopiasFormFactory;
use App\Forms\MaquinasFormFactory;
use App\Model\Listas;
use App\Model\Orm\Copias;
use App\Model\Orm\Maquinas;
use Exception;
use Nette\Application\UI\Form;
use Nette\Application\UI\Multiplier;
use Nextras\Orm\Collection\ICollection;
use stdClass;


class MaquinasPresenter extends BaseAdminPresenter
{

    /** @var $maquinaEditada Maquinas */

    private $maquinaEditada;

   
    private $holidaysStarts = [
        0 => "15-07-2022",
        1 => "21-12-2022",
        2 => "01-04-2022"
     ];
     private $holidaysEnds = [
         0 => "01-09-2022",
         1 => "07-01-2023",
         2 => "15-04-2022"
     ];

      //    Modos Render Default
    //    $mode 7 VACIO, TODOS
    //    $mode 8 Maquinas en un cliente
    //    $mode 9 Maquinas de un proveedor
    //    otros $mode segun el estado de la maquina (taller, etc.)
    public function renderDefault($id, $mode, $order): void
    {
        if (!isset($id)) {
            $this->template->mode = 7;
        } elseif ($mode == 8) {
            //MODO CLIENTE
            $this->template->mode = 8;
            $this->template->maquinas = $this->orm->empresa->getById($id)->maquinas;
            $this->template->empresa = $this->orm->empresa->getById($id);
        } elseif ($mode == 9) {
            //MODO PROVEEDOR
            $this->template->mode = 9;
            $this->template->maquinas = $this->orm->maquinas->findBy(['proveedor' => $id]);
            $this->template->proveedor = $this->orm->proveedor->getById($id);
        } else {
            $this->template->maquinas = $this->orm->maquinas->findBy(['estado' => $mode]);
        }
    }
    ////
    //
    //          SKIP HOLIDAYS
    //
    ////
    private function holidaysToSkip($firstDay , $lastDay){
        $holidayStart = $this->holidaysStarts;
        $holidayEnd = $this->holidaysEnds;
        $diferencia = 0;
        $firstDay = explode('/', $firstDay);
        $firstDay = date_create($firstDay[2] . '-' . $firstDay[1] . '-' . $firstDay[0]);
        $dateone = explode('/', $lastDay);
        $dateone = date_create($dateone[2] . '-' . $dateone[1] . '-' . $dateone[0]);
        $i = 0; 
        while ($i < count($holidayStart)) {
            
            $datetwo = explode('-', date('d-m-Y', strtotime($holidayStart[$i])));
            $datethree = explode('-', date('d-m-Y', strtotime($holidayEnd[$i])));
            $datetwo = date_create($datetwo[2] . '-' . $datetwo[1] . '-' . $datetwo[0]);
            $datethree = date_create($datethree[2] . '-' . $datethree[1] . '-' . $datethree[0]);
            $dateone;
            $datetwo;
            $diffBoth = date_diff($datetwo, $datethree);
            $diffFirst = date_diff($dateone, $datetwo);
            $diffSecond = date_diff($datethree, $dateone);
            if(!date_diff($datethree, $dateone)->invert){
                if($diffFirst->invert && !$diffSecond->invert){
                    $diferencia = $diferencia + $diffFirst->days;
                }
                if(!$diffFirst->invert && !$diffSecond->invert){
                    $diferencia = $diferencia + $diffBoth->days;
                }
            } 
            $i++;
        }
        return $diferencia;
    }
    ////
    //
    //          FUNCION GET MEDIA
    //
    ////
    private function getDiffDaysCopy($printerId){
        $firstCopy = $this->orm->copias->findFirstByPrinterId($printerId);
        $lastCopy = $this->orm->copias->findLastByPrinterId($printerId);

        $dateone = explode('/', $firstCopy->fecha);
        $datetwo = explode('/', $lastCopy->fecha);
        $diferencia = date_diff(date_create($dateone[2] . '-' . $dateone[1] . '-' .
                $dateone[0]), date_create($datetwo[2] . '-' . $datetwo[1] . '-' .
                $datetwo[0]));

        return $diferencia->days;
    }

    private function getMidCopy($printerId, $type, $holidays){
        $firstCopy = $this->orm->copias->findFirstByPrinterId($printerId);
        $lastCopy = $this->orm->copias->findLastByPrinterId($printerId);

        $media = ceil(($lastCopy->$type - $firstCopy->$type) / ($this->getDiffDaysCopy($printerId)) - $holidays);
        
        return $media;
    }
    
    //
    //
    //
    //          INFORMACION
    //
    //
    //
    public function actioninfo($id): void
    {
        if (!$this->orm->maquinas->getById($id)) {
            $this->flashMessage("La Maquina a la que intentas acceder no existe o se ha dado de baja en el sistema", 'danger');
            $this->redirect("Maquinas:default");
        }
        $maquina = $this->orm->maquinas->getById($id);
        $modo = 10;
        $holidays =  $this->holidaysToSkip($this->orm->copias->findFirstByPrinterId($id)->fecha, $this->orm->copias->findLastByPrinterId($id)->fecha,);

        //$this->template->copiasTotalBn = ceil($cuentaBn / (($diferencia->d / 7) * 5));
        if (count($maquina->copias) >= '2') {
            $this->template->copiasTotalBn = $this->getMidCopy($id, "copiasbn", $holidays);
            $this->template->copiasTotalCl = $this->getMidCopy($id, "copiascl", $holidays);
            $this->template->copiasTotalEsc = $this->getMidCopy($id, "escaneos", $holidays);
            $this->template->copiasTotalL = $this->getMidCopy($id, "copiasl", $holidays);
            $this->template->copiasTotalLl = $this->getMidCopy($id, "copiasll", $holidays);
            $this->template->copiasTotalLll = $this->getMidCopy($id, "copiaslll", $holidays);
        }

        $this->template->maquina = $maquina;
        $this->template->mode = $modo;
        
        
    }
    //
    //
    //
    //
    //                              AÑADIR
    //
    //
    //

    public function actionAdd($idpasado, $modo)
    {
        if ($modo == 0) {
            //            default
        }
        if ($modo == 1) {
            //            cliente
            $this->template->idpasado = $idpasado;
        }
    }

    public function createComponentAddMaquinaForm()
    {

        $empresasarray = $this->orm->empresa->findAll()->fetchPairs('id', 'nombre');
        $proveedores = $this->orm->proveedor->findAll()->fetchPairs('id', 'nombre');
        $form = (new MaquinasFormFactory())->createNuevo($empresasarray, $proveedores);

        $form->onSuccess[] = [$this, 'onSuccessAddMaquina'];

        return $form;
    }

    public function onSuccessAddMaquina(Form $form, stdClass $values): void
    {
        $maquina = new Maquinas();
        try {
            $maquina->modelo = $values->modelo;
            if (!is_null($values->ip)) {
                if (testip($values->ip)) {
                    $maquina->ip = $values->ip;
                } else {
                    $this->flashMessage("IP Incorrecta", 'danger');
                    $this->redirect("Maquinas:edit", $maquina->id);
                }
            }
            if (!is_null($values->mascara)) {
                if (testip($values->mascara)) {
                    $maquina->mascara = $values->mascara;
                } else {
                    $this->flashMessage("Mascara Incorrecta", 'danger');
                    $this->redirect("Maquinas:edit", $maquina->id);
                }
            }
            $maquina->vfirmware = $values->vfirmware;
            $maquina->fcompra = $values->fcompra;
            $maquina->tipocontador = $values->tipocontador;
            $maquina->estado = $values->estado;
            $maquina->origen = $values->origen;
            $maquina->finicioservicio = $values->finicioservicio;
            $maquina->ffinalservicio = $values->ffinalservicio;
            $maquina->tipocontrato = $values->tipocontrato;
            $maquina->tipogarantia = $values->tipogarantia;
            $maquina->comentario = $values->comentario;
            $maquina->token = md5("tfORiHix0@VHfKGNvG2y%FR&f5dI8LMK" . microtime()); //genera token único con salt
            $maquina->codegroups = $values->codegroups;
            $maquina->facturationgroup = $values->facturationgroup;

//            if (!is_null($values->firmwarebackup)) {
//                $firmware = $values->firmwarebackup;
//                if (is_null($firmware)) {
//                    $firmware->move("upload/" . $values->modelo . $values->empresa . "Backup" . date('dmY') .
//                                    $values->firmwarebackup->name);
//                    $maquina->firmwarebackup = "upload/" . $values->modelo . $values->empresa . "Backup" . date('dmY') .
//                        $values->firmwarebackup->name;
//                }
//            }

            $proveedor = $this->orm->proveedor->getById($values->proveedor);
            $proveedor->maquinas->add($maquina);
            $empresa = $this->orm->empresa->getById($values->empresa);
            $empresa->maquinas->add($maquina);

            $this->orm->persistAndFlush($maquina);
        } catch (Exception $e) {
            $this->flashMessage("Error: " . $e->getMessage(), 'danger');
        }
        $this->redirect('Maquinas:default');
    }

    public function actionEdit($idMaquina)
    {
        $this->maquinaEditada = $this->orm->maquinas->getById($idMaquina);
        $this->template->maquina = $this->maquinaEditada;
    }

    public function createComponentEditarMaquinaForm()
    {
        $empresasarray = $this->orm->empresa->findAll()->fetchPairs('id', 'nombre');
        $proveedores = $this->orm->proveedor->findAll()->fetchPairs('id', 'nombre');
        $form = (new MaquinasFormFactory())->createEdit($this->maquinaEditada, $empresasarray, $proveedores);
        $form->onSuccess[] = [$this, 'onSuccessEditarMaquina'];
        return $form;
    }

    public function onSuccessEditarMaquina(Form $form, stdClass $values): void
    {

        $maquine = $this->orm->maquinas->getById($values->id);
        try {


            $maquine->modelo = $values->modelo;
            if (!is_null($values->ip)) {
                if (testip($values->ip)) {
                    $maquine->ip = $values->ip;
                } else {
                    $this->flashMessage("IP Incorrecta", 'danger');
                    $this->redirect("Maquinas:edit", $maquine->id);
                }
            }
            if (!is_null($values->mascara)) {
                if (testip($values->mascara)) {
                    $maquine->mascara = $values->mascara;
                } else {
                    $this->flashMessage("Mascara Incorrecta", 'danger');
                    $this->redirect("Maquinas:edit", $maquine->id);
                }
            }
            $maquine->vfirmware = $values->vfirmware;
            $maquine->fcompra = $values->fcompra;
            $maquine->tipocontador = $values->tipocontador;
            $maquine->estado = $values->estado;
            $maquine->origen = $values->origen;
            $maquine->finicioservicio = $values->finicioservicio;
            $maquine->ffinalservicio = $values->ffinalservicio;
            $maquine->tipocontrato = $values->tipocontrato;
            $maquine->tipogarantia = $values->tipogarantia;
            $maquine->comentario = $values->comentario;
            $maquine->codegroups = $values->codegroups;
            $maquine->facturationgroup = $values->facturationgroup;
            $proveedor = $this->orm->proveedor->getById($values->proveedor);
            $proveedor->maquinas->add($maquine);
            $empresa = $this->orm->empresa->getById($values->empresa);
            $empresa->maquinas->add($maquine);

            $this->orm->persistAndFlush($maquine);
        } catch (Exception $e) {
            $this->flashMessage("Error: " . $e->getMessage(), 'danger');
        }
        $this->redirect('Maquinas:info', $values->id);
    }
}
