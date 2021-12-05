<?php
declare(strict_types=1);

namespace App\Presenters;

final class HomepagePresenter extends BasePresenter
{

    public function actionDefault() { }

    public function renderDefault()
    {

        //$this->template->date = date("D");

        //$user = $this->getDbUser();

        if ($this->getDbUser()) {

            $user = $this->getDbUser();

            if ($user->rol == "encargado") {

                //$this->redirect('Averias:default');

            }
        }


    }

}
