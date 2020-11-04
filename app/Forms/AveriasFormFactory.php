<?php

declare( strict_types = 1 );

namespace App\Forms;

use App\Model\Orm\Averias;

use Nette;

use Nette\Application\UI\Form;

final class AveriasFormFactory {

    use Nette\SmartObject;

    public function createNuevo (Averias $averia) {
        
        $form = $this->create();
        
        $form->setDefaults($averia->toArray(2));
        
        return $form;
    }
    public function createEdit (Averias $averia) {

        $form = $this->create();

        $form->setDefaults($averia->toArray(2));

        return $form;
    }
    
    public function create(): Form {

        $form = ( new FormFactory() )->create();

        $form->addHidden('id', 'Id de la averia');

        $form->addText('usuario', 'Usuario')->setRequired();

        $form->addText('fechaInicio', 'Inicio de la averia')->setRequired();

        $form->addText('fechaFinal', 'Final de la averia')->setRequired();

        $form->addText('descripcion', 'Descripcion')->setRequired();

        $form->addText('aparato', 'Aparato');

        $form->addText('marca', 'Marca');

        $form->addText('modelo', 'Modelo');

        $form->addText('numeroSerie', 'Numero de serie');

        $form->addText('resolucion', 'Resolucion');

        $form->addText('horas', 'Horas');

        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

}
