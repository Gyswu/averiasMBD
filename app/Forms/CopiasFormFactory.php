<?php

declare(strict_types=1);

namespace App\Forms;

use App\Model\Orm\Copias;
use App\Model\Orm\Maquinas;
use App\Model\Orm\Orm;
use Nette;
use Nette\Application\UI\Form;


final class CopiasFormFactory
{

    private const PASSWORD_MIN_LENGTH = 7;

    /** @var Orm */

    private $orm;

    use Nette\SmartObject;

    public function createNuevo(Maquinas $maquina)
    {
        $mode = $maquina->tipocontador;
        $idmaquina = $maquina->id;
        if ($mode == 0) {
            $form = $this->createBn($idmaquina);
            return $form;
        } elseif ($mode == 1) {
            $form = $this->createColor($idmaquina);
            return $form;
        } elseif ($mode == 2) {
            $form = $this->createTriple($idmaquina);
            return $form;
        } elseif ($mode == 3) {
            $form = $this->createBn($idmaquina);
            return $form;
        }

    }

    public function createBn($idmaquina): Form
    {

        $form = (new FormFactory())->create();

        $form->addHidden('id', 'Copia ID');
        $form->addText('fecha', 'FECHA DD/MM/YYYY')->setDefaultValue(date('d/m/Y'))
             ->setHtmlAttribute("data-provide", "datepicker")
             ->setHtmlAttribute("data-date-format", "dd/mm/yyyy")
        ;
        $form->addInteger('copiasbn', 'Copias BN')
             ->setRequired()
        ;
        $form->addHidden('copiascl', '');
        $form->addHidden('copiasl', '');
        $form->addHidden('copiasll', '');
        $form->addHidden('copiaslll', '');
        $form->addInteger('escaneos', 'Escaneos')
             ->setRequired()
        ;
        $form->addHidden('idmaquina', 'ID MAQUINA')->setDefaultValue($idmaquina);


        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

    public function createColor($idmaquina): Form
    {

        $form = (new FormFactory())->create();

        $form->addHidden('id', 'Copia ID');
        $form->addText('fecha', 'FECHA DD/MM/YYYY')->setDefaultValue(date('d/m/Y'))
             ->setHtmlAttribute("data-provide", "datepicker")
             ->setHtmlAttribute("data-date-format", "dd/mm/yyyy")
        ;
        $form->addInteger('copiasbn', 'Copias BN')
             ->setRequired()
        ;
        $form->addInteger('copiascl', 'Copias Color')
             ->setRequired()
        ;
        $form->addHidden('copiasl', '');
        $form->addHidden('copiasll', '');
        $form->addHidden('copiaslll', '');
        $form->addInteger('escaneos', 'Escaneos')
             ->setRequired()
        ;
        $form->addHidden('idmaquina', 'ID MAQUINA')->setDefaultValue($idmaquina);


        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

    public function createTriple($idmaquina): Form
    {

        $form = (new FormFactory())->create();

        $form->addHidden('id', 'Copia ID');
        $form->addHidden('idmaquina', 'ID MAQUINA')->setDefaultValue($idmaquina);
        $form->addText('fecha', 'FECHA DD/MM/YYYY')->setDefaultValue(date('d/m/Y'))
             ->setHtmlAttribute("data-provide", "datepicker")
             ->setHtmlAttribute("data-date-format", "dd/mm/yyyy")
        ;
        $form->addInteger('copiasbn', 'Copias BN')
             ->setRequired()
        ;
        $form->addHidden('copiascl', '');
        $form->addInteger('copiasl', 'Copias N1')
             ->setRequired()
        ;
        $form->addInteger('copiasll', 'Copias N2')
             ->setRequired()
        ;
        $form->addInteger('copiaslll', 'Copias N3')
             ->setRequired()
        ;
        $form->addInteger('escaneos', 'Escaneos')
             ->setRequired()
        ;


        $form->addSubmit('send', 'Guardar')->setHtmlAttribute("class", 'btn btn-success');

        return $form;
    }

    public function createEdit(Copias $copia)
    {
        $mode = $copia->maquina->tipocontador;
        if ($mode == 0) {
            $form = $this->createBn($copia->maquina->id)->setDefaults($copia->toArray(2));
            return $form;
        } elseif ($mode == 1) {
            $form = $this->createColor($copia->maquina->id)->setDefaults($copia->toArray(2));
            return $form;
        } elseif ($mode == 2) {
            $form = $this->createTriple($copia->maquina->id)->setDefaults($copia->toArray(2));
            return $form;
        }

    }
}
