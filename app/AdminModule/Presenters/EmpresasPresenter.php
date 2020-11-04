<?php

namespace App\AdminModule\Presenters;

use App\Forms\FormFactory;
use App\Model\Orm\Empresa;
use Nette\Application\UI\Form;
use App\Forms\EmpresasFormFactory;


class EmpresasPresenter extends BaseAdminPresenter {

//    /** @var $empresaEditada Empresa */
//    private $empresaEditada;

    public function renderDefault(){
        $this->template->empresas = $this->orm->empresa->findAll();
    }

    public function actionAdd(){

    }

    public function createComponentAddEmpresaForm(){

        $empresa = new Empresa();

        $form = (new EmpresasFormFactory())->createNuevo();
        $form->onSuccess[] = [$this, 'onSuccessAddEmpresa'];

        return $form;
    }

    public function onSuccessAddEmpresa(Form $form, \stdClass $values ) :void{
            $empresa = new Empresa();
        try{
                $empresa->id = $values->id;
                $empresa->nif = $values->nif;
                $empresa->nombre = $values->nombre;
                $empresa->telefono = $values->telefono;
                $empresa->direccion = $values->direccion;

                $this->orm->persistAndFlush($empresa);
            $this->flashMessage('Empresa añadida correctamente', 'success');

        } catch( Model\DuplicateNameException $e ) {

            $form['nif']->addError('Este nif ya existe');

            return;
            }

            $this->redirect('this');
    }

}
