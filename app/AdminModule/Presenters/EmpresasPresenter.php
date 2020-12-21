<?php

namespace App\AdminModule\Presenters;


use App\Forms\FormFactory;

use App\Model\Orm\Empresa;

use Nette\Application\UI\Form;

use App\Forms\EmpresasFormFactory;


class EmpresasPresenter extends BaseAdminPresenter {

    /** @var $empresaEditada Empresa */

    private $empresaEditada;

    public function renderDefault(){

        $this->template->empresas = $this->orm->empresa->findAll();

    }


//   _______________________AÑADIR EMPRESA ____________________________________

    public function actionAdd() {}

    /*public function filterEmpresa() {

        $filter = $this->getComponent('Empresa1')->getValues(TRUE);

        $this->template->empresas = $this->orm->empresa

            ->order('id DESC')

            ->where('done', '0')

            ->where('workTag1', $filter['workTag1']);

    }*/

    public function createComponentAddEmpresaForm(){

        $empresa = new Empresa();

        $form = (new EmpresasFormFactory())->createNuevo();

        $form->onSuccess[] = [$this, 'onSuccessAddEmpresa'];

        return $form;

    }

    public function onSuccessAddEmpresa (Form $form, \stdClass $values) :void{

        $empresa = new Empresa();

        try {

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

//    _______________________EDITAR EMPRESA__________________________________

    public function actionEdit ($idEmpresa){

        $this->empresaEditada = $this->orm->empresa->getById($idEmpresa);

        $this->template->empresa = $this->empresaEditada;

    }

    public function createComponentEditarEmpresaForm(){

        $form = (new EmpresasFormFactory())->createEdit($this->empresaEditada);

        $form->onSuccess[] = [$this, 'onSuccessEditarEmpresa'];

        return $form;
    }

    public function onSuccessEditarEmpresa(Form $form, \stdClass $values) :void{

        $empresa = $this->orm->empresa->getById($this->empresaEditada->id);

        try {

            $empresa->nif = $values->nif;

            $empresa->nombre = $values->nombre;

            $empresa->telefono = $values->telefono;

            $empresa->direccion = $values->direccion;

            $this->orm->persistAndFlush($empresa);

            $this->flashMessage('Empresa editada correctamente', 'success');

        } catch( Model\DuplicateNameException $e ) {

            $form['nif']->addError('Este nif ya existe');

            return;

        } $this->redirect('this');
    }

//    ___________________ ELIMINAR EMPRESA ___________________

    public function actionBorrar ($idEmpresa){

        $this->flashMessage('La empresa no puede ser borrada', 'danger');

        $this->redirect('Empresas:default');

    }

}
