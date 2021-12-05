<?php

namespace App\AdminModule\Presenters;

use App\Forms\AveriasFormFactory;
use App\Model\Orm\Averias;
use Exception;
use Nette\Application\UI\Form;
use Nextras\Orm\Collection\ICollection;
use stdClass;

class AveriasPresenter extends BaseAdminPresenter
{

    /** @var $averiaEditada Averia */

    private $averiaEditada;

    public function renderDefault($idAveria): void
    {

        $this->template->averias = $this->orm->averias->findAll();

        $this->template->rol = $this->getDbUser()->rol;

        if (!$idAveria) {
            $this->template->averias = $this->orm->averias->findAll();
        } else {

            $this->template->averias = $this->orm->averias->findBy(['id' => $idAveria])
                                                          ->orderBy('id', ICollection::DESC);
        }

    }

// _____________________________ EDITAR _______________________________________________

    public function actionEdit($idAveria)
    {

        $averia = $this->orm->averias->getById($idAveria);

        $this->averiaEditada = $averia;

        $this->template->averia = $averia;
    }

    public function createComponentEditarAveriaForm()
    {

        $empresasarray = $this->orm->empresa->findAll()->fetchPairs("id", "nombre");

        $form = (new AveriasFormFactory())->createEdit($this->averiaEditada, $empresasarray);

        $form->onSuccess[] = [$this, 'onSuccessEditarAveria'];

        return $form;
    }

    public function onSuccessEditarAveria(Form $form, stdClass $values): void
    {

        $averiax = new Averias();

        try {

            $id = $values->id;

            $averiax = $this->orm->averias->getById($id);

            //$averiax->descripcion = $values->descripcion;

            $averiax->aparato = $values->aparato;

            $averiax->marca = $values->marca;

            $averiax->modelo = $values->modelo;

            $averiax->numeroserie = $values->numeroserie;

            $averiax->resolucion = $values->resolucion;

            $averiax->insitu = $values->insitu;

            $averiax->horasfuera = $values->horasfuera;

            $this->averiaEditada = $averiax;

            $this->orm->persistAndFlush($averiax);

            $this->flashMessage('Averia editada correctamente', 'success');
        } catch (Exception $e) {
            $this->flashMessage("Error: " . $e->getMessage(), 'danger');
        }

        $this->redirect('Averias:default');
    }


//__________________AÑADIR____________________________

    public function createComponentAddAveriaForm($empresaId)
    {

        $averia = new Averias();

        $empresasarray = $this->orm->empresa->findAll()->fetchPairs('id', 'nombre');

        $form = (new AveriasFormFactory())->createNuevo($empresasarray);

        $form->onSuccess[] = [$this, 'onSuccessAddAveria'];

        return $form;
    }

    public function onSuccessAddAveria(Form $form, stdClass $values): void
    {

        try {

            $averiax = new Averias();

            $averiax->fechainicio = date('d/m/Y');

            $averiax->descripcion = $values->descripcion;

            $averiax->aparato = $values->aparato;

            $averiax->marca = $values->marca;

            $averiax->modelo = $values->modelo;

            $averiax->numeroserie = $values->numeroserie;

            $averiax->estado = $values->estado;

            $usuario = $this->orm->usuarios->getById($this->getDbUser()->id);

            $usuario->averias->add($averiax);

            $this->orm->persistAndFlush($usuario);

            $this->flashMessage('Averia añadida correctamente', 'success');

        } catch (Exception $e) {

            dd($e->getMessage());

            $this->flashMessage("Error: " . $e->getMessage(), 'danger');
        }

        $this->redirect('Averias:default');
    }

//____________________BORRAR_____________________________________

    public function actionBorrarAverias($idAveria)
    {

        try {

            if (!$averia = $this->orm->averias->getById($idAveria)) {
                $this->flashMessage("La averia no existe", "danger");
            }

            $this->orm->averias->removeAndFlush($averia);

            $this->flashMessage("Averia eliminada", "success");

        } catch (Exception $e) {

            $this->flashMessage("Error al eliminar la averia, contacte con el administrador", 'danger');
        }

        $this->redirect('Averias:default', $idAveria);
    }

    //____________________COMBIO DE ESTADO_____________________________________
    public function actionProceso($idAveria)
    {

        $averia = $this->orm->averias->getById($idAveria);

        $averia->estado = 1;

        $this->orm->persistAndFlush($averia);

        $this->redirect('Averias:default');

        $this->flashMessage('Se ha cambiado el estado correctamente', 'success');

    }

    public function actionFinalizado($idAveria)
    {

        $averia = $this->orm->averias->getById($idAveria);

        if ((!empty($averia->insitu) || !empty($averia->horasfuera)) && !empty($averia->resolucion)) {

            $averia->estado = 2;

            $this->orm->persistAndFlush($averia);

            $this->redirect('Averias:default');

            $this->flashMessage('Se ha cambiado el estado correctamente', 'success');

        } else {

            $this->flashMessage('Completa el campo de resolucion y horas antes de finalizar', 'danger');

            $this->redirect('Averias:edit', $idAveria);

        }

    }

}

/*IMPORTAR

    public function createComponentImportarAlumnosForm(){
        $form = ( new AlumnosFormFactory())->createImport();
        $form->onSuccess[] = [ $this, 'onSuccessImportarAlumnos' ];

        return $form;
    }

    public function onSuccessImportarAlumnos(Form $form, \stdClass $values ): void {
     try{
         $archivo = $values->import->getContents();
         $xml = simplexml_load_string($archivo);

             foreach ($xml->aulas->aula as $aula){
                $p = $aula->attributes()->codigo;
                d($p);
             }

         dd($xml->aulas->aula[0]);

     } catch( \Exception $e ) {

         $this->flashMessage("Error: " . $e->getMessage(), 'danger');
     }
        $this->redirect('this');
    }
*/