<?php

namespace App\AdminModule\Presenters;


class ProveedoresPresenter extends BaseAdminPresenter
{
    public function renderDefault()
    {
        $this->template->proveedores = $this->orm->proveedor->findAll();
    }

    public function actioninfo($id)
    {
        $this->template->proveedor = $this->orm->proveedor->getById($id);
    }
}
