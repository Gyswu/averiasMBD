<?php

namespace App\AdminModule\Presenters;

use App\Forms\CopiasFormFactory;
use App\Forms\MaquinasFormFactory;
use App\Model\Orm\Copias;
use App\Model\Orm\Maquinas;
use Nette\Application\UI\Form;
use Nextras\Orm\Collection\ICollection;

class CopiasPresenter extends BaseAdminPresenter
{

    /** @var $copiaEditada Copias */

    private $copiaEditada;

    /** @var $maquinaEditada Maquinas */

    private $maquinaEditada;



//    Modos Render Default
//    $mode 7 VACIO, TODOS
//    $mode 8 Maquinas en un cliente
//    $mode 9 Copias de un proveedor
//    $mode 10 Copias de una maquina

    public function renderDefault($value, $mode) :void{

        if( !isset($value)) {
            $this->template->copias = $this->orm->copias->findAll()->orderBy('id',ICollection::DESC);
            $this->template->modo = 7;
            } elseif ($mode == 8){
            //MODO CLIENTE
            $this->template->modo = $mode;
            $this->template->maquinas = $this->orm->empresa->getById($value)->maquinas;
            } elseif ($mode == 9){
            //MODO PROVEEDOR
            $this->template->modo = $mode;
            $maquinas = $this->orm->maquinas->findBy(['empresa' => $value]);
            $this->template->maquinas = $this->orm->proveedor->getById($value)->maquinas;
            } elseif ($mode == 10) {
            $this->template->modo = (int)$mode;
//            MODO MAQUINAS
//            COPIAS BN 0
//            COPIAS COLOR 1
//            TRIPLE CONTADOR 2
            $this->template->copies = $this->orm->copias->findBy(['maquina' => $value])->orderBy('id',ICollection::DESC);
            $this->template->copias = $this->orm->maquinas->getById($value);
        }
    }

//
//
//                                  AÑADIR
//
//
    public function actionAdd($idMaquina){
        $this->maquinaEditada = $this->orm->maquinas->getById($idMaquina);
        $this->template->maquina = $this->maquinaEditada;

    }

    public function createComponentAddCopiasForm(){
        $form = ( new CopiasFormFactory())->createNuevo($this->maquinaEditada);
        $form->onSuccess[] = [ $this, 'onSuccessAddCopias'];
        return $form;
    }

    public function onSuccessAddCopias(Form $form, \stdClass $values ): void
    {
//
//
//        $COPIAS ULTIMA COPIA PARA COMPARAR
//        $COPIES NUEVA COPIA QUE SE ENTRA
//
//
        $copies = new Copias();
        $copias = new Copias();

        $comparecopias = $this->orm->copias->findBy(['maquina' => $values->idmaquina])->orderBy('id', ICollection::DESC)->limitBy(1);
        foreach ($comparecopias as $comparar){
            $copias = $comparar;
        }
        $maquina = $this->orm->maquinas->getById($values->idmaquina);
        try{
            if(isset($copias->id)){
                if ($maquina->tipocontador == 0) {
                    if ($copias->copiasbn < $values->copiasbn) {
                        $copies->copiasbn = $values->copiasbn;
                    } else {
                        $this->flashMessage(" BN es menor a su predecesor", 'danger');
                    }
                    if ($copias->escaneos < $values->escaneos) {
                        $copies->escaneos = $values->escaneos;
                    } else {
                        $this->flashMessage(" Escaneos es menor a su predecesor", 'danger');
                    }
                    $copies->fecha = $values->fecha;
                    $maquina->copias->add($copies);
                    $this->orm->maquinas->persistAndFlush($maquina);
                    $this->flashMessage("Añadido de forma correcta", 'success');

                } elseif ($maquina->tipocontador == 1) {
                    if ($copias->copiasbn < $values->copiasbn) {
                        $copies->copiasbn = $values->copiasbn;
                    } else {
                        $this->flashMessage(" BN es menor a su predecesor", 'danger');
                    }
                    if ($copias->escaneos < $values->escaneos) {
                        $copies->escaneos = $values->escaneos;
                    } else {
                        $this->flashMessage(" Escaneos es menor a su predecesor", 'danger');
                    }
                    if ($copias->copiascl < $values->copiascl) {
                        $copies->copiascl = $values->copiascl;
                    } else {
                        $this->flashMessage(" Color es menor a su predecesor", 'danger');
                    }


                    $copies->fecha = $values->fecha;
                    $maquina->copias->add($copies);
                    $this->orm->maquinas->persistAndFlush($maquina);
                    $this->flashMessage("Añadido de forma correcta", 'success');

                } elseif ($maquina->tipocontador == 2) {
                    if ($copias->copiasbn < $values->copiasbn) {
                        $copies->copiasbn = $values->copiasbn;
                    } else {
                        $this->flashMessage(" BN es menor a su predecesor", 'danger');
                    }
                    if ($copias->escaneos < $values->escaneos) {
                        $copies->escaneos = $values->escaneos;
                    } else {
                        $this->flashMessage(" Escaneos es menor a su predecesor", 'danger');
                    }
                    if ($copias->copiasl < $values->copiasl) {
                        $copies->copiasl = $values->copiasl;
                    } else {
                        $this->flashMessage(" N1 es menor a su predecesor", 'danger');
                    }
                    if ($copias->copiasll < $values->copiasll) {
                        $copies->copiasll = $values->copiasll;
                    } else {
                        $this->flashMessage(" N2 es menor a su predecesor", 'danger');
                    }
                    if ($copias->copiaslll < $values->copiaslll) {
                        $copies->copiaslll = $values->copiaslll;
                    } else {
                        $this->flashMessage(" N3 es menor a su predecesor", 'danger');
                    }
                    $copies->fecha = $values->fecha;
                    $maquina->copias->add($copies);

                    $this->orm->maquinas->persistAndFlush($maquina);
                    $this->flashMessage("Añadido de forma correcta", 'success');
                } else {
                    $this->redirect('Copias:default');
                }
            } else {
                if ($maquina->tipocontador == 0) {

                        $copies->copiasbn = $values->copiasbn;
                        $copies->escaneos = $values->escaneos;
                        $copies->fecha = $values->fecha;

                    $maquina->copias->add($copies);
                    $this->orm->maquinas->persistAndFlush($maquina);
                    $this->flashMessage("Añadido de forma correcta", 'success');

                } elseif ($maquina->tipocontador == 1) {

                        $copies->copiasbn = $values->copiasbn;
                        $copies->escaneos = $values->escaneos;
                        $copies->copiascl = $values->copiascl;
                        $copies->fecha = $values->fecha;

                    $maquina->copias->add($copies);
                    $this->orm->maquinas->persistAndFlush($maquina);
                    $this->flashMessage("Añadido de forma correcta", 'success');

                } elseif ($maquina->tipocontador == 2) {

                        $copies->copiasbn = $values->copiasbn;
                        $copies->escaneos = $values->escaneos;
                        $copies->copiasl = $values->copiasl;
                        $copies->copiasll = $values->copiasll;
                        $copies->copiaslll = $values->copiaslll;
                        $copies->fecha = $values->fecha;

                    $maquina->copias->add($copies);
                    $this->orm->maquinas->persistAndFlush($maquina);
                    $this->flashMessage("Añadido de forma correcta", 'success');
                } else {
                    $this->redirect('Copias:default');
                }
            }
        } catch( \Exception $e ) {}
//        $this->flashMessage("Error: " . $e->getMessage(), 'danger');
        $this->redirect('Copias:default', $maquina->id , 10);
    }

//
//
//EDITAR COPIAS
//
//
    public function actionEdit($idCopia){
        $this->copiaEditada = $this->orm->copias->getById($idCopia);
        $this->maquinaEditada = $this->copiaEditada->maquina;

        $this->template->copia = $this->copiaEditada;
        $this->template->maquina = $this->maquinaEditada;

    }

    public function createComponentEditCopiaForm(){
        $form = ( new CopiasFormFactory())->createEdit($this->copiaEditada);
        $form->onSuccess[] = [ $this, 'onSuccessEditarCopia'];
        return $form;
    }

    public function onSuccessEditarCopia(Form $form, \stdClass $values ): void{
        $copia = $this->orm->copias->getById($values->id);
        $mode = $copia->maquina->tipocontador;

        if($mode == 0){
            $copia->copiasbn = $values->copiasbn;
            $copia->escaneos = $values->escaneos;

        } elseif($mode == 1){
            $copia->copiasbn = $values->copiasbn;
            $copia->copiascl = $values->copiascl;
            $copia->escaneos = $values->escaneos;

        } elseif ($mode == 2){
            $copia->copiasbn = $values->copiasbn;
            $copia->copiasl = $values->copiasl;
            $copia->copiasll = $values->copiasll;
            $copia->copiaslll = $values->copiaslll;
            $copia->escaneos = $values->escaneos;
        }
        $this->orm->copias->persistAndFlush($copia);
        $this->redirect('Copias:default', $copia->maquina->id , 10);

    }


//
//
//ELIMINAR COPIAS
//
//

    public function actionRemoveCopia($idcopia, $modo){
        $copia = $this->orm->copias->getById($idcopia);
        $idmaquina = $copia->maquina->id;
        $this->orm->copias->removeAndFlush($copia);
        $this->redirect('Copias:default', $idmaquina, $modo);

    }

}