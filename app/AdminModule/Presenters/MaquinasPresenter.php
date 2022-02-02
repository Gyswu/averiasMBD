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

//    Modos Render Default
//    $mode 7 VACIO, TODOS
//    $mode 8 Maquinas en un cliente
//    $mode 9 Maquinas de un proveedor
//    otros $mode segun el estado de la maquina (taller, etc.)

    public function renderDefault($id, $mode, $order): void
    {
        if (!isset($id)) {
            if (!isset($order)) {
                $this->template->maquinas = $this->orm->maquinas->findAll()->orderBy('id', ICollection::DESC);
            } elseif ($order == 1) {
                $this->template->maquinas = $this->orm->maquinas->findAll()->orderBy('modelo', ICollection::DESC);
            } elseif ($order == 2) {
                $this->template->maquinas = $this->orm->maquinas->findAll()->orderBy('modelo', ICollection::ASC);
            } elseif ($order == 3) {
                $this->template->maquinas = $this->orm->maquinas->findAll()->orderBy('proveedor', ICollection::DESC);
            } elseif ($order == 4) {
                $this->template->maquinas = $this->orm->maquinas->findAll()->orderBy('proveedor', ICollection::ASC);
            } elseif ($order == 5) {
                $this->template->maquinas = $this->orm->maquinas->findAll()->orderBy('empresa', ICollection::DESC);
            } elseif ($order == 6) {
                $this->template->maquinas = $this->orm->maquinas->findAll()->orderBy('empresa', ICollection::ASC);
            } elseif ($order == 7) {
                $this->template->maquinas = $this->orm->maquinas->findAll()->orderBy('estado', ICollection::DESC);
            } elseif ($order == 8) {
                $this->template->maquinas = $this->orm->maquinas->findAll()->orderBy('estado', ICollection::ASC);
            }

            $listaCajones = Listas::getCajones();

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
        $mediaCopiasBn = 0;

        $contador = 0;
        $cuentaBn = 0;
        $cuentaCl = 0;
        $cuentaEsc = 0;
        $cuentaL = 0;
        $cuentaLl = 0;
        $cuentaLll = 0;
        $modo = 10;

        $firstCopia = new Copias();
        $lastCopia = new Copias();
        if (count($maquina->copias) >= '1') {
            foreach ($maquina->copias as $copia) {
                if ($contador == 0) {
                    $firstCopia = $copia;
                    $contador++;
                }
                $lastCopia = $copia;
            }
            if (!$lastCopia->copiasbn == null) {
                $cuentaBn = $lastCopia->copiasbn - $firstCopia->copiasbn;
            }
            if (!$lastCopia->copiascl == null) {
                $cuentaCl = $lastCopia->copiascl - $firstCopia->copiascl;
            }
            if (!$lastCopia->escaneos == null) {
                $cuentaEsc = $lastCopia->escaneos - $firstCopia->escaneos;
            }
            if (!$lastCopia->copiasl == null) {
                $cuentaL = $lastCopia->copiasl - $firstCopia->copiasl;
            }
            if (!$lastCopia->copiasll == null) {
                $cuentaLl = $lastCopia->copiasll - $firstCopia->copiasll;
            }
            if (!$lastCopia->copiaslll == null) {
                $cuentaLll = $lastCopia->copiaslll - $firstCopia->copiaslll;
            }

        $fechauno = explode('/', $firstCopia->fecha);
        $fechados = explode('/', $lastCopia->fecha);
        $diferencia = date_diff(date_create($fechauno[2] . '-' . $fechauno[1] . '-' .
                                            $fechauno[0]), date_create($fechados[2] . '-' . $fechados[1] . '-' .
                                                                       $fechados[0]));
        }
        //$this->template->copiasTotalBn = ceil($cuentaBn / (($diferencia->d / 7) * 5));
        if (count($maquina->copias) >= '2') {
            $this->template->copiasTotalBn = ceil($cuentaBn / $diferencia->days);
            $this->template->copiasTotalCl = ceil($cuentaCl / $diferencia->days);
            $this->template->copiasTotalEsc = ceil($cuentaEsc / $diferencia->days);
            $this->template->copiasTotalL = ceil($cuentaL / $diferencia->days);
            $this->template->copiasTotalLl = ceil($cuentaLl / $diferencia->days);
            $this->template->copiasTotalLll = ceil($cuentaLll / $diferencia->days);
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
//        dd($values->firmwarebackup);
        $maquina = new Maquinas();
        try {
            $maquina->modelo = $values->modelo;
            if (is_null($values->ip)) {
                if (testip($values->ip)) {
                    $maquina->ip = $values->ip;
                } else {
                    $this->flashMessage("IP Incorrecta", 'danger');
                    $this->redirect("Maquinas:add");
                }
            }
            if (is_null($values->mascara)) {
                if (testip($values->mascara)) {
                    $maquina->mascara = $values->ip;
                } else {
                    $this->flashMessage("Mascara Incorrecta", 'danger');
                    $this->redirect("Maquinas:add");
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


            if (!is_null($values->firmwarebackup)) {
                $firmware = $values->firmwarebackup;
                if (is_null($firmware)) {
                    $firmware->move("upload/" . $values->modelo . $values->empresa . "Backup" . date('dmY') .
                                    $values->firmwarebackup->name);
                    $maquina->firmwarebackup = "upload/" . $values->modelo . $values->empresa . "Backup" . date('dmY') .
                        $values->firmwarebackup->name;
                }
            }
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
//            dd($maquine);
            if (!is_null($values->firmwarebackup)) {
                $firmware = $values->firmwarebackup;
                if (is_null($firmware)) {
                    $firmware->move("upload/" . $values->modelo . $values->empresa . "Backup" . date('dmY') .
                                    $values->firmwarebackup->name);
                    $maquine->firmwarebackup = "upload/" . $values->modelo . $values->empresa . "Backup" . date('dmY') .
                        $values->firmwarebackup->name;
                }
            }
            $proveedor = $this->orm->proveedor->getById($values->proveedor);
            $proveedor->maquinas->add($maquine);
            $empresa = $this->orm->empresa->getById($values->empresa);
            $empresa->maquinas->add($maquine);

            $this->orm->persistAndFlush($maquine);
        } catch (Exception $e) {
            $this->flashMessage("Error: " . $e->getMessage(), 'danger');
        }
        $this->redirect('Maquinas:default');
    }
//
//
//    AÑADIR COPIAS
//
//


    public function createComponentAddCopiasForm()
    {

        return new Multiplier(function ($idmaquina) {
            $maquina = $this->orm->maquinas->getById($idmaquina);
            $form = (new CopiasFormFactory())->createNuevo($maquina);
            $form->onSuccess[] = [$this, 'onSuccessAddCopias'];
            return $form;
        });
    }

    public function onSuccessAddCopias(Form $form, stdClass $values): void
    {
//
//
//        $COPIAS ULTIMA COPIA PARA COMPARAR
//        $COPIES NUEVA COPIA QUE SE ENTRA
//
//
        $copies = new Copias();
        $copias = new Copias();

        $comparecopias = $this->orm->copias->findBy(['maquina' => $values->idmaquina])->orderBy('id', ICollection::DESC)
                                           ->limitBy(1);
        foreach ($comparecopias as $comparar) {
            $copias = $comparar;
        }
        $maquina = $this->orm->maquinas->getById($values->idmaquina);
        try {
            if (isset($copias->id)) {
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
        } catch (Exception $e) {
        }
//        $this->flashMessage("Error: " . $e->getMessage(), 'danger');
        $this->redirect('Copias:default', $maquina->id, 10);
    }

}
