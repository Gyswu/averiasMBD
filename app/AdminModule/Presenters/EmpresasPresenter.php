<?php

namespace App\AdminModule\Presenters;


use App\Forms\EmpresasFormFactory;
use App\Model\Orm\Empresa;
use Exception;
use Nette\Application\UI\Form;
use stdClass;


class EmpresasPresenter extends BaseAdminPresenter
{

    /** @var $empresaEditada Empresa */

    private $empresaEditada;


    public function renderDefault($value): void
    {


    }
// -------------------------------------------------------------------
// -------------------------------------------------------------------
// --------------------INFORMACION------------------------------------
// -------------------------------------------------------------------
// -------------------------------------------------------------------
    public function actionInfo($idEmpresa)
    {

        $this->template->empresa = $this->orm->empresa->getById($idEmpresa);

    }

//   _______________________AÑADIR EMPRESA ____________________________________

    public function actionAdd() { }

    public function createComponentAddEmpresaForm()
    {

        $empresa = new Empresa();

        $form = (new EmpresasFormFactory())->createNuevo();

        $form->onSuccess[] = [$this, 'onSuccessAddEmpresa'];

        return $form;

    }

    public function onSuccessAddEmpresa(Form $form, stdClass $values): void
    {

        $empresa = new Empresa();

        try {

            $empresa->id = $values->id;

            $empresa->nif = $values->nif;

            $empresa->nombre = $values->nombre;

            $empresa->telefono = $values->telefono;

            $empresa->direccion = $values->direccion;

            $empresa->contacto = $values->contacto;

            $this->orm->persistAndFlush($empresa);

            $this->flashMessage('Empresa añadida correctamente', 'success');

        } catch (Model\DuplicateNameException $e) {

            $form['nif']->addError('Este nif ya existe');

            return;

        }

        $this->redirect('this');
    }

//    _______________________EDITAR EMPRESA__________________________________

    public function actionEdit($idEmpresa)
    {

        $this->empresaEditada = $this->orm->empresa->getById($idEmpresa);

        $this->template->empresa = $this->empresaEditada;

    }

    public function createComponentEditarEmpresaForm()
    {

        $form = (new EmpresasFormFactory())->createEdit($this->empresaEditada);

        $form->onSuccess[] = [$this, 'onSuccessEditarEmpresa'];

        return $form;
    }

    public function onSuccessEditarEmpresa(Form $form, stdClass $values): void
    {

        $empresa = $this->orm->empresa->getById($this->empresaEditada->id);

        try {

            $empresa->nif = $values->nif;

            $empresa->nombre = $values->nombre;


            $empresa->telefono = $values->telefono;

            $empresa->direccion = $values->direccion;

            $empresa->contacto = $values->contacto;

            $this->orm->persistAndFlush($empresa);

            $this->flashMessage('Empresa editada correctamente', 'success');

        } catch (Model\DuplicateNameException $e) {

            $form['nif']->addError('Este nif ya existe');

            return;

        }
        $this->redirect('this');
    }

//    ___________________ ELIMINAR EMPRESA ___________________

    public function actionBorrar($idEmpresa)
    {

        try {
            $empresa = new Empresa();
            $empresa = $this->orm->empresa->getById($idEmpresa);
            if(count($empresa->usuarios) >= 1){
                foreach ($empresa->usuarios as $usuario) {
                    foreach ($usuario->averias as $averia) {
                        $borrado = $this->orm->usuarios->getById(666);
                        $borrado->averias->add($averia);
                        $this->orm->usuarios->persistAndFlush($borrado);
                    }
                    $this->orm->usuarios->removeAndFlush($usuario);
                }
            }


            $this->orm->empresa->removeAndFlush($empresa);
            $this->flashMessage('Empresa borrada correctamente', 'success');
        } catch (Exception $e) {
            $this->flashMessage(
                "Error al eliminar, contacte con el administrador" . $e, 'danger');
        }


        $this->redirect('Empresas:default');

    }

}
