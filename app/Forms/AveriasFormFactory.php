<?php

declare( strict_types = 1 );

namespace App\Forms;

use App\Model\Orm\Averias;

use App\Model\Orm\Empresa;
use Nette;

use Nette\Application\UI\Form;

final class AveriasFormFactory {

    use Nette\SmartObject;

    public function createNuevo () {

        $form = $this->create();

        return $form;
    }

    public function createEdit (Averias $averia) {

        $form = $this->create();

        $form->setDefaults($averia->toArray(2));

        return $form;
    }
    
    public function create (): Form {

        $form = ( new FormFactory() )->create();

        $form->addHidden('id', 'Id de la averia');

        $form->addText('fechainicio', 'Inicio de la averia')->setRequired();

        $form->addText('fechafinal', 'Final de la averia')->setRequired();

        $form->addText('descripcion', 'Descripcion')->setRequired();

        $form->addText('aparato', 'Aparato');

        $form->addText('marca', 'Marca');

        $form->addText('modelo', 'Modelo');

        $form->addText('numeroserie', 'Numero de serie');

        $form->addText('resolucion', 'Resolucion');

        $form->addText('horas', 'Horas');

        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

}
