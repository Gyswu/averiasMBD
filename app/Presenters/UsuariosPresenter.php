<?php

namespace App\Presenters;

//USUARIO SERÁ CAPAZ DE VER SUS AVERIAS, HISTORICO DE LAS AVERIAS, CREAR AVERIA

use App\Forms\UsuariosFormFactory;

use App\Model\Orm\Usuarios;

use App\Model\Orm\Empresas;

use Nette\Application\UI\Form;

use Nextras\Orm\Collection\ICollection;

class UsuariosPresenter extends BasePresenter {

    /** @var $usuarioEditado Usuario */

    private $usuarioEditado;

    public function renderDefault ($usuarioID): void {

        if (!$usuarioID) {

            if(!$this->getDbUser()->empresa){

                $this->flashMessage("Error: Contacte con el administrador", 'danger');

                $this->redirect('Homepage:default');
            }

            //$idCentro = $this->getDbUser()->centro->id;

            //$this->template->clases = $this->orm->clases->findBy(['centro' => $idCentro]);

        } else {

            $this->template->usuarios = $this->orm->usuarios->findBy(['idEmpresa' => $this])->orderBy('apellidos', ICollection::ASC);

            //$fecha = date("d-m-Y");

            //$today = 0;


            /*$clase = $this->orm->clases->getById($claseID);

            foreach ($clase->historicos as $historico){

                if($historico->fecha === $fecha){

                    $today++;

                }

            }
            $this->template->today = $today;*/
        }

        //$this->template->centro = $this->getDbUser()->centro;

        //$this->template->clase = $this->orm->clases->getById($claseID);

        //$this->template->date = date("D");


    }

    /*___________________EDITAR________________________________________*/

    public function actionEditar( $idUsuario ) {

        $this->usuarioEditado = $this->orm->usuarios->getById($idUsuario);

        $this->template->usuario = $this->usuarioEditado;

    }

    public function createComponentEditarUsuarioForm() {

        $form = ( new UsuariosFormFactory() )->createEdit($this->usuarioEditado);

        $form->onSuccess[] = [ $this, 'onSuccessEditarUsuario' ];

        return $form;
    }

    public function onSuccessEditarUsuario (Form $form, \stdClass $values ): void {

        Nette\Utils\Validators::assert($values->correo, 'email');

        try {

            $usuario = $this->orm->usuarios->getById($values->id);

            $usuario->nombre = $values->nombre;

            $usuario->correo = $values->correo;

            if ($values->password) {$usuario->password = $values->password;}

            $usuario->password = $this->passwords->hash($usuario->password);

            $usuario->rol = $values->rol;

            $usuario->telefono = $values->telefono;

            $this->orm->persistAndFlush($usuario);


            $this->flashMessage('Usuario añadido correctamente', 'success');

        } catch( Model\DuplicateNameException $e ) {

            $form['email']->addError('Este correo ya existe, por favor elige otro o recupera tu contraseña.');

            return;

        }

        $this->redirect('this');
    }

    /*public function actionEnviarComedor($claseID){
        $clase = $this->orm->clases->getById($claseID);
        $total = 0;
        $today = 0;
        $fecha = date("d-m-Y");
        foreach ($clase->historicos as $historico){
            if($historico->fecha === $fecha){
                $today++;
            }
        }
        if(!claseID || !$this->getDbUser()->centro) {
            $this->flashMessage("Error A1 - No deberias estar aquí, contacta con el administrador", 'danger');
            $this->redirect('Homepage:default');
        } elseif ($today === 1){
            $this->flashMessage("Error A2 - Hoy ya han sido enviados los datos", 'danger');
            $this->redirect('Homepage:default');
        } else {
            foreach ($clase->alumnos as $alumno){
                $date = date("D");


                if ($date = "Mon"){
                    if ($alumno->mon){
                        $comedor = new Comedor();
                        $comedor->alumno = $alumno;
                        $comedor->fecha = $fecha;
                        $this->orm->persistAndFlush($comedor);
                        $total++;
                    }

                } elseif ($date = "Tue"){
                    if ($alumno->tue){
                        $comedor = new Comedor();
                        $comedor->alumno = $alumno;
                        $comedor->fecha = $fecha;
                        $this->orm->persistAndFlush($comedor);
                        $total++;
                    }

                } elseif ($date = "Wed"){
                    if ($alumno->wed){
                        $comedor = new Comedor();
                        $comedor->alumno = $alumno;
                        $comedor->fecha = $fecha;
                        $this->orm->persistAndFlush($comedor);
                        $total++;
                    }

                } elseif ($date = "Thu"){
                    if ($alumno->thu){
                        $comedor = new Comedor();
                        $comedor->alumno = $alumno;
                        $comedor->fecha = $fecha;
                        $this->orm->persistAndFlush($comedor);
                        $total++;
                    }

                } elseif ($date = "Fri"){
                    if ($alumno->fri){
                        $comedor = new Comedor();
                        $comedor->alumno = $alumno;
                        $comedor->fecha = $fecha;
                        $this->orm->persistAndFlush($comedor);
                        $total++;
                    }

                } elseif ($alumno->today ){
                    $comedor = new Comedor();
                    $comedor->alumno = $alumno;
                    $comedor->fecha = $fecha;
                    $this->orm->persistAndFlush($comedor);
                    $total++;
                }



            }

            $historico = new Historico();
            $historico->fecha = $fecha;
            $historico->clase = $clase;
            $historico->cantidad = $total;
            $historico->usuario = $this->orm->usuarios->getById($this->getDbUser()->id);


//            Envios
            $this->orm->persistAndFlush($historico);

//
            $this->flashMessage("Enviado", 'success');
            $this->redirect('Alumnos:default', $claseID);
        }

    }*/

}
