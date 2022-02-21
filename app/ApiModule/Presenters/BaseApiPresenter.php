<?php

namespace App\ApiModule\Presenters;

use App\Presenters\BasePresenter;
use Nette\Utils\Json;

class BaseApiPresenter extends BasePresenter
{
    protected $redirectLogin = false;

    public function renderdefault(): void
    {
        $this->sendJson("Y si me dices las palabras mágicas?");
    }

    protected function getPostData()
    {
        try {
            return Json::decode($this->getHttpRequest()->getRawBody());
        } catch (\Error $e) {
            $this->sendJson("Invalid request body, is json valid?");
        }
    }

    protected function sendErrors($errors)
    {
        $this->sendJson(["errors" => $errors]);
    }
}
