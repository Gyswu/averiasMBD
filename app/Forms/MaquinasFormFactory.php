<?php

declare(strict_types=1);

namespace App\Forms;

use App\Model\Orm\Maquinas;
use App\Model\Orm\Orm;
use Nette;
use Nette\Application\UI\Form;


final class MaquinasFormFactory
{

    private const PASSWORD_MIN_LENGTH = 7;

    /** @var Orm */

    private $orm;

    use Nette\SmartObject;

    public function createNuevo($empresasarray, $proveedores)
    {

        $form = $this->create($empresasarray, $proveedores);

        return $form;
    }

    public function create(array $empresas, array $proveedores): Form
    {

        $form = (new FormFactory())->create();

        $form->addHidden('id', 'MAQUINA ID');


        $form->addText('modelo', 'Modelo de la maquina')->setRequired();

        $form->addText('ip', 'IP de la maquina')
             ->addRule($form::MIN_LENGTH, 'IP DEMASIADO CORTA', '7')
             ->addRule($form::MAX_LENGTH, 'IP DEMASIADO LARGA', '15')
        ;

        $form->addText('mascara', 'Mascara de la maquina')
             ->addRule($form::MIN_LENGTH, 'Mascara DEMASIADO CORTA', '7')
             ->addRule($form::MAX_LENGTH, 'Mascara DEMASIADO LARGA', '15')
        ;

        $form->addText('vfirmware', 'Firmware');
        $form->addSelect('empresa', 'Cliente: ', $empresas)->setDefaultValue(1)
//            ->setHtmlAttribute("class", "wrapper")
//            ->setHtmlAttribute("onfocus","this.zie=5")
//            ->setHtmlAttribute("onblur", "this.size=1")
//            ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
             ->setHtmlAttribute("data-live-search", "true")
             ->setHtmlAttribute("class", "selectpicker")
        ;
        $form->addSelect('proveedor', 'Proveedor:', $proveedores)->setDefaultValue(1)
             ->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;
        $form->addText('fcompra', 'Fecha de compra DD/MM/YYYY')->setHtmlAttribute("data-provide", "datepicker");
        $form->addSelect('tipocontador', 'Tipo de Contador', [
            '0' => 'BN',
            '1' => 'Color',
            '2' => 'Triple'
        ]);
        $form->addSelect('estado', 'Estado', [
            '0' => 'Sin Preparar',
            '1' => 'Puesta a punto',
            '2' => 'Preparada',
            '3' => 'In Situ',
            '4' => 'Out of Service',
            '5' => 'En taller',
            '6' => 'Desguace'
        ])->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;

        $form->addSelect('origen', 'Origen', [
            '0' => 'Nueva',
            '1' => 'Ocasion'
        ])->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;

        $form->addText('finicioservicio', 'Fecha Inicio Servicio DD/MM/YYYY')->setDefaultValue(date('d/m/Y'))
             ->setHtmlAttribute("data-provide", "datepicker")
             ->setHtmlAttribute("data-date-format", "mm/dd/yyyy")
        ;
        $form->addText('ffinalservicio', 'Fecha Final Servicio DD/MM/YYYY')
             ->setHtmlAttribute("data-provide", "datepicker")
             ->setHtmlAttribute("data-date-format", "mm/dd/yyyy")
        ;
        $form->addSelect('tipocontrato', 'Contrato', [
            '0' => 'Compra',
            '1' => 'Renting',
            '2' => 'Mantenimiento'
        ])->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;

        $form->addSelect('tipogarantia', 'Garantia', [
            '0' => '3 meses',
            '1' => '6 meeses',
            '2' => '12 meses'
        ])->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;

        $form->addTextArea('comentario', 'Comentario')
             ->setHtmlAttribute('class', 'form-control')
             ->setHtmlAttribute('rows', 3)
        ;
        $form->addUpload('firmwarebackup', 'Firmware Backup');

        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

    public function createEdit(Maquinas $maquina, $empresasarray, $proveedores)
    {

        $form = $this->createEditMaquina($empresasarray, $proveedores);

        $form->setDefaults($maquina->toArray(2));

        return $form;

    }

    public function createEditMaquina(array $empresas, array $proveedores): Form
    {

        $form = (new FormFactory())->create();

        $form->addHidden('id', 'MAQUINA ID');


        $form->addText('modelo', 'Modelo de la maquina')->setRequired();

        $form->addText('ip', 'IP de la maquina')
             ->addRule($form::MIN_LENGTH, 'IP DEMASIADO CORTA', '7')
             ->addRule($form::MAX_LENGTH, 'IP DEMASIADO LARGA', '15')
        ;

        $form->addText('mascara', 'Mascara de la maquina')
             ->addRule($form::MIN_LENGTH, 'Mascara DEMASIADO CORTA', '7')
             ->addRule($form::MAX_LENGTH, 'Mascara DEMASIADO LARGA', '15')
        ;

        $form->addText('vfirmware', 'Firmware');
        $form->addSelect('empresa', 'Cliente: ', $empresas)->setDefaultValue(1)
//            ->setHtmlAttribute("class", "wrapper")
//            ->setHtmlAttribute("onfocus","this.zie=5")
//            ->setHtmlAttribute("onblur", "this.size=1")
//            ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
             ->setHtmlAttribute("data-live-search", "true")
             ->setHtmlAttribute("class", "selectpicker")
        ;
        $form->addSelect('proveedor', 'Proveedor:', $proveedores)->setDefaultValue(1)
             ->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;
        $form->addText('fcompra', 'Fecha de compra DD/MM/YYYY')->setHtmlAttribute("data-provide", "datepicker");
        $form->addSelect('tipocontador', 'Tipo de Contador', [
            '0' => 'BN',
            '1' => 'Color',
            '2' => 'Triple'
        ]);
        $form->addSelect('estado', 'Estado', [
            '0' => 'Sin Preparar',
            '1' => 'Puesta a punto',
            '2' => 'Preparada',
            '3' => 'In Situ',
            '4' => 'Out of Service',
            '5' => 'En taller',
            '6' => 'Desguace'
        ])->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;

        $form->addSelect('origen', 'Origen', [
            '0' => 'Nueva',
            '1' => 'Ocasion'
        ])->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;

        $form->addText('finicioservicio', 'Fecha Inicio Servicio DD/MM/YYYY')
             ->setHtmlAttribute("data-provide", "datepicker")
        ;
        $form->addText('ffinalservicio', 'Fecha Final Servicio DD/MM/YYYY')
             ->setHtmlAttribute("data-provide", "datepicker")
        ;
        $form->addSelect('tipocontrato', 'Contrato', [
            '0' => 'Compra',
            '1' => 'Renting',
            '2' => 'Mantenimiento'
        ])->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;

        $form->addSelect('tipogarantia', 'Garantia', [
            '0' => '3 meses',
            '1' => '6 meeses',
            '2' => '12 meses'
        ])->setHtmlAttribute("class", "wrapper")
             ->setHtmlAttribute("onfocus", "this.zie=5")
             ->setHtmlAttribute("onblur", "this.size=1")
             ->setHtmlAttribute("this.size", "this.size=1 this.blur()")
        ;

        $form->addTextArea('comentario', 'Comentario')
             ->setHtmlAttribute('class', 'form-control')
             ->setHtmlAttribute('rows', 3)
        ;
        $form->addUpload('firmwarebackup', 'Firmware Backup');

        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

}