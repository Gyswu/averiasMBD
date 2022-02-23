<?php

declare(strict_types=1);

namespace App\Forms;

use App\Model\Orm\Cambios;
use App\Model\Orm\Orm;
use App\Model\Orm\Usuario;
use Nette;
use Nette\Application\UI\Form;
use App\Model\Listas;

final class PiezasFormFactory
{

    private const PASSWORD_MIN_LENGTH = 7;

    /** @var Orm */

    private $orm;

    use Nette\SmartObject;

    public function createNuevo($idMaquina)
    {

        $form = $this->create($idMaquina);

        return $form;
    }

    public function create($idMaquina): Form
    {
        $piezas = (new Listas())->getPiezas();
        $form = (new FormFactory())->create();

        $form->addHidden('id');
        $form->addHidden('idMaquina', $idMaquina);

        $form->addSelect('pieza', 'Piezas: ', $piezas)->setDefaultValue(0)
            ->setHtmlAttribute("data-live-search", "true")
            ->setHtmlAttribute("class", "selectpicker")
        ;

        $form->addText('fecha', 'Fecha Cambio DD/MM/YYYY')
             ->setDefaultValue(date('d/m/Y'))
             ->setHtmlAttribute("data-provide", "datepicker")
             ->setHtmlAttribute("data-date-format", "mm/dd/yyyy")
        ;
        $form->addInteger('copias', 'Copias');

        $form->addTextArea('causa', 'Causa del cambio');


        $form->addSelect('origen', 'Origen', [
           '0' => 'Desconocido',
           '1' => 'Nueva',
           '2' => 'Ocasion'
        ]);


        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

    public function createEdit(Cambios $cambio)
    {

        $form = $this->createEditChange();

        $form->setDefaults($cambio->toArray(2));

        return $form;

    }

    public function createEditChange(): Form
    {
        $piezas = (new Listas())->getPiezas();
        $form = (new FormFactory())->create();

        $form->addHidden('id');
        $form->addHidden('idMaquina');

        $form->addSelect('pieza', 'Piezas: ', $piezas)->setDefaultValue(0)
             ->setHtmlAttribute("data-live-search", "true")
             ->setHtmlAttribute("class", "selectpicker")
        ;

        $form->addText('fecha', 'Fecha Cambio DD/MM/YYYY')
             ->setDefaultValue(date('d/m/Y'))
             ->setHtmlAttribute("data-provide", "datepicker")
             ->setHtmlAttribute("data-date-format", "mm/dd/yyyy")
        ;
        $form->addInteger('copias', 'Copias');

        $form->addTextArea('causa', 'Causa del cambio');


        $form->addSelect('origen', 'Origen', [
            '0' => 'Desconocido',
            '1' => 'Nueva',
            '2' => 'Ocasion'
        ]);


        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

}