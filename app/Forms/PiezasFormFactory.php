<?php

declare(strict_types=1);

namespace App\Forms;

use App\Model\Orm\Orm;
use App\Model\Orm\Usuario;
use Nette;
use Nette\Application\UI\Form;

final class PiezasFormFactory
{

    private const PASSWORD_MIN_LENGTH = 7;

    /** @var Orm */

    private $orm;

    use Nette\SmartObject;

    public function createNuevo(array $piezas)
    {

        $form = $this->create($piezas);

        return $form;
    }

    public function create(array $piezas): Form
    {

        $form = (new FormFactory())->create();

        $form->addHidden('id', 'Id de Cambio');

        $form->addSelect('pieza', 'Piezas: ', $piezas)->setDefaultValue(1)
            ->setHtmlAttribute("data-live-search", "true")
            ->setHtmlAttribute("class", "selectpicker")
        ;

        $form->addText('fechacambio', 'Fecha Cambio DD/MM/YYYY')
             ->setDefaultValue(date('d/m/Y'))
             ->setHtmlAttribute("data-provide", "datepicker")
             ->setHtmlAttribute("data-date-format", "mm/dd/yyyy")
        ;
        $form->addInteger('copias', 'Copias');

        $form->addText('causa', 'Causa del cambio');

        $form->addSelect('origen', 'Origen', [
           '0' => ' ',
           '1' => 'Nueva',
           '2' => 'Ocasion'
        ]);


        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

    public function createEdit(Usuario $usuario, array $empresas)
    {

        $form = $this->createEditChange($empresas);

        $form->setDefaults($usuario->toArray(2));

        return $form;

    }

    public function createEditChange(array $piezas): Form
    {

        $form = (new FormFactory())->create();

        $form->addHidden('id', 'Id de Cambio');

        $form->addSelect('pieza', 'Piezas: ', $piezas)->setDefaultValue(1)
             ->setHtmlAttribute("data-live-search", "true")
             ->setHtmlAttribute("class", "selectpicker")
        ;

        $form->addText('fechacambio', 'Fecha Cambio DD/MM/YYYY')
             ->setDefaultValue(date('d/m/Y'))
             ->setHtmlAttribute("data-provide", "datepicker")
             ->setHtmlAttribute("data-date-format", "mm/dd/yyyy")
        ;


        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

}