<?php

declare(strict_types=1);

namespace App\Forms;

use App\Model\Orm\Empresa;
use Nette\Application\UI\Form;

final class EmpresasFormFactory
{

    public function createNuevo()
    {

        $form = $this->create();

        return $form;
    }

    public function create(): Form
    {

        $form = (new FormFactory())->create();

        $form->addHidden('id', 'Id de Empresa');

        $form->addText('nif', 'Nif Empresa');

        $form->addText('nombre', 'Nombre empresa')->setRequired('Porfavor indique el nombre de la empresa');

        $form->addInteger('telefono', 'Numero de telefono')
             ->addRule($form::MIN_LENGTH, 'Telefono demasiado corto', '9')
             ->addRule($form::MAX_LENGTH, 'Telefono demasiado largo', '9')
        ;

        $form->addText('direccion', 'Dirección');
        $form->addText('contacto', 'Persona de contacto');

        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

    public function createEdit(Empresa $empresa)
    {

        $form = $this->create();

        $form->setDefaults($empresa->toArray(2));

        return $form;
    }

    public function createSearch()
    {
        $form = $this->newSearch();
        return $form;
    }

    public function newSearch(): Form
    {

        $form = (new FormFactory())->create();
        $form->addText('search', '')->setHtmlAttribute("class", 'rounded');
        $form->addSubmit('send', 'Buscar')->setHtmlAttribute("class", 'btn btn-outline-primary');

        return $form;
    }

}
