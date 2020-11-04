<?php

namespace App\AdminModule\Presenters;

use App\Model\Orm\Empresa;



class EmpresasPresenter extends BaseAdminPresenter {

//    /** @var $empresaEditada Empresa */
//    private $empresaEditada;

    public function renderDefaultEmpresas(){
        $this->template->empresa = $this->orm->empresa->getById(1);
    }

}
