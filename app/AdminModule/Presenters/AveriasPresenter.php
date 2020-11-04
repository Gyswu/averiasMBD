<?php

namespace App\AdminModule\Presenters;

use App\Forms\AveriasFormFactory;

use App\Model\Orm\Averias;

use Nette\Application\UI\Form;

use Nextras\Orm\Collection\ICollection;

use Nette\SmartObject;

class AveriasPresenter extends BaseAdminPresenter {

    /** @var $averiaEditada Averia*/
    
    private $averiaEditada;

    public function renderDefault ($idAveria): void {

        $this->template->averias = $this->orm->averias->findAll();
        
        $this->template->rol = $this->getDbUser()->rol;
        
         if (!$idAveria) {$this->template->todosLosCentros = $this->orm->averias->findAll();} 
         
         else {
             
            $this->template->id = $this->orm->averias->findBy(['id' => $idAveria])->orderBy('fechainicio', ICollection::DESC);
                    
        }

    }

// _____________________________ EDITAR _______________________________________________

    public function actionEdit( $idAveria) {
        
        $averia = $this->orm->averias->getById($idAveria);
        
        $this->averiaEditada = $averia;
        
        $this->template->averia = $averia;
    }
    
    public function createComponentEditarAveriaForm() {

        $form = ( new AveriasFormFactory() )->createEdit($this->averiaEditada);
        
        $form->onSuccess[] = [ $this, 'onSuccessEditarAveria' ];

        return $form;
    }
    
    public function onSuccessEditarAveria (Form $form, \stdClass $values ): void {
        
        $averiax = new Averias();
        
        try {
            
            $id = $values->id;
            
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
            
            $this->orm->persistAndFlush($averiax);
            
            $this->flashMessage('Averia editada correctamente', 'success');
        }
         
        catch( \Exception $e ) {$this->flashMessage("Error: " . $e->getMessage(), 'danger');}
        
        $this->redirect('Averias:default', $this->averiaEditada->id);
    }

//-
//AÑADIR
//-
    /*public function actionAdd($idClase) {
        $clase = $this->orm->clases->getById($idClase);
        $this->claseEdit = $clase;
        //
        $this->template->item = $clase;
        $this->template->clase = $clase;
    }*/

//__________________AÑADIR____________________________

    public function createComponentMasAveriasForm(){
        
        $averia = new Averias();
        
        $form = ( new AveriasFormFactory() )->createNuevo($averia, $this->averia->id);
        
        $form->onSuccess[] = [ $this, 'onSuccessMasAverias' ];

        return $form;
    }

    public function onSuccessMasAverias (Form $form, \stdClass $values ): void {
        
        try {
            
            $averiax = $this->averiaEdit;

            $averiax = new Averia();
            
            $averiax->fechaInicio = $values->fechaInicio;
            
            $averiax->fechaFinal = $values->fechaFinal;
            
            $averiax->descripcion = $values->descripcion;

            $averiax->aparato = $values->aparato;

            $averiax->marca = $values->marca;

            $averiax->modelo = $values->modelo;

            $averiax->numeroSerie = $values->numeroSerie;

            $averiax->resolucion = $values->resolucion;

            $averiax->horas = $values->horas;
           
            $this->orm->persistAndFlush($averiax);
            
            $this->flashMessage('Averia añadida correctamente', 'success');
        
        } catch( \Exception $e ) {

            $this->flashMessage("Error: " . $e->getMessage(), 'danger');
        }
        $this->redirect('this');
    }

//____________________BORRAR_____________________________________
    
    public function actionBorrarAverias ($idAveria){

        try {
            
            if (!$averia = $this->orm->averias->getById($idAveria)) {$this->flashMessage("La averia no existe", "danger");};
            
            $this->orm->averias->removeAndFlush($averia);
            
            $this->flashMessage("Averia eliminada", "success");
        
        } catch( \Exception $e ) {
            
            $this->flashMessage("Error al eliminar la averia, contacte con el administrador",'danger');
        }
        
        $this->redirect('Averias:default', $idAveria);
    }

}


//-
//IMPORTAR
//-
    /*public function createComponentImportarAlumnosForm(){
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
    }*/