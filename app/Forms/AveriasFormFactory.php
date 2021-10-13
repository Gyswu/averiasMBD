<?php

declare( strict_types = 1 );

namespace App\Forms;

use App\Model\Orm\Averias;

use App\Model\Orm\Empresa;

use Nette;

use Nette\Application\UI\Form;

final class AveriasFormFactory {

    use Nette\SmartObject;

    public function createNuevo (array $empresas) {

        $form = $this->createNew($empresas);

        return $form;
    }//Añadir averia Admin

    public function createACliente (array $empresas) {


        $form = $this->createAClient($empresas);


        return $form;
    }//Añadir Averia cliente

    public function createEdit (Averias $averia, array $empresas) {

        $form = $this->create($empresas);

        $form->setDefaults($averia->toArray(2));

        return $form;
    }//Editar Averia Admin

    public function createEditCliente (Averias $averia) {

        $form = $this->createAClient();

        $form->setDefaults($averia->toArray(2));

        return $form;

    }//Editar Averia Cliente

    public function createAClient (): Form {

        $form = ( new FormFactory() )->create();

        $form->addHidden('id', 'Id de la averia');

        $form->addText('descripcion', 'Descripcion')->setRequired();

        $form->addText('aparato', 'Aparato');

        $form->addText('marca', 'Marca');

        $form->addText('modelo', 'Modelo');

        $form->addText('numeroserie', 'Numero de serie');

        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

    public function create (): Form {

        $form = ( new FormFactory() )->create();

        $form->addHidden('id', 'Id de la averia');

        $form->addText('descripcion', 'Descripcion')->setRequired();

        $form->addText('aparato', 'Aparato');

        $form->addText('marca', 'Marca');

        $form->addText('modelo', 'Modelo');

        $form->addText('numeroserie', 'Numero de serie');

        $form->addText('insitu', 'Horas en taller');

        $form->addText('horasfuera', 'Horas fuera del taller');

        $form->addTextArea('resolucion', 'Resolucion')
        ->setHtmlAttribute('class', 'form-control')
        ->setHtmlAttribute('rows',3);

        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

    public function createNew (array $empresas): Form { //administrador añadir averia

        $form = ( new FormFactory() )->create($empresas);

        $form->addSelect('estado', 'Estado de la averia', [

            '0' => 'Abierto',

            '1' => 'En Proceso',

            '2' => 'Finalizado'

        ]);

        $form->addSelect('empresa', 'Empresa Perteneciente: ', $empresas)->setDefaultValue(1);

        $form->addHidden('id', 'Id de la averia');

        $form->addText('descripcion', 'Descripcion')->setRequired();

        $form->addText('aparato', 'Aparato');

        $form->addText('marca', 'Marca');

        $form->addText('modelo', 'Modelo');

        $form->addText('numeroserie', 'Numero de serie');

        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

}
