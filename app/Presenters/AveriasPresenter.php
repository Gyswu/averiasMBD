<?php

namespace App\Presenters;

use App\Forms\AveriasFormFactory;

use App\Model\Orm\Averias;

use App\Model\Orm\Usuario;
use Nette\Application\UI\Form;

class AveriasPresenter extends BasePresenter {

    /** @var $averiaEditada Averia*/

    private $averiaEditada;

    //mostrar todas las averias

    public function renderDefault ($idAveria): void {

        $this->template->averias = $this->orm->averias->findAll();

    }

// _____________________________ EDITAR _______________________________________________

    public function actionEdit( $idAveria) {

        $this->averiaEditada = $this->orm->averias->getById($idAveria);

        $this->template->averia = $this->averiaEditada;
    }

    public function createComponentEditarAveriaForm() {

        $form = ( new AveriasFormFactory() )->createEdit($this->averiaEditada);

        $form->onSuccess[] = [ $this, 'onSuccessEditarAveria' ];

        return $form;
    }

    public function onSuccessEditarAveria (Form $form, \stdClass $values ): void {

        //Instanciar Objeto de averias, para ir sacando los datos

        $averiax = new Averias();

        try {

            $id = $values->id;

            //accede al orm, tabla de averias y llama a funcion para sacar id que ya esta creada por orm

            $averiax = $this->orm->averias->getById($id);

            $averiax->fechainicio = $values->fechainicio;

            $averiax->fechafinal = $values->fechafinal;

            $averiax->descripcion = $values->descripcion;

            $averiax->aparato = $values->aparato;

            $averiax->marca = $values->marca;

            $averiax->modelo = $values->modelo;

            $averiax->numeroserie = $values->numeroserie;

            $averiax->resolucion = $values->resolucion;

            $averiax->horas = $values->horas;

            $this->averiaEditada = $averiax;

//            dd($averiax);

            //se guardan todos los datos del objeto averia y los sube a la base de datos ya editados

            $this->orm->persistAndFlush($averiax);

            $this->flashMessage('Averia editada correctamente', 'success');
        }

        catch( \Exception $e ) {$this->flashMessage("Error: " . $e->getMessage(), 'danger');}

        $this->redirect('Averias:default', $this->averiaEditada->id);
    }

//__________________AÑADIR____________________________


    public function actionAdd() {}

    public function createComponentAddAveriaForm(){

        $averia = new Averias();

        $form = ( new AveriasFormFactory() )->createNuevo();

        $form->onSuccess[] = [ $this, 'onSuccessAddAveria' ];

        return $form;
    }

    public function onSuccessAddAveria (Form $form, \stdClass $values ): void {

        try {

            $averiax = new Averias();




            $averiax->fechainicio = $values->fechainicio;

            $averiax->fechafinal = $values->fechafinal;

            $averiax->descripcion = $values->descripcion;

            $averiax->aparato = $values->aparato;

            $averiax->marca = $values->marca;

            $averiax->modelo = $values->modelo;

            $averiax->numeroserie = $values->numeroserie;

            $averiax->resolucion = $values->resolucion;

            $averiax->horas = $values->horas;


            $usuariox = $this->orm->usuarios->getById($this->getDbUser()->id);


            $usuariox->averias->add($averiax);

            $this->orm->persistAndFlush($usuariox);

            $this->flashMessage('Averia añadida correctamente', 'success');

        } catch( \Exception $e ) {

            $this->flashMessage("Error: " . $e->getMessage(), 'danger');
        }
        $this->redirect('this');
    }

//____________________BORRAR_____________________________________

    public function actionBorrar ($idAveria){

        $this->flashMessage('La averia no puede ser borrada', 'danger');

        $this->redirect('Averias:default');
    }

}
