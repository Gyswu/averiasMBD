<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

use Nette\Application\Response;
use Nette\Application\Responses\JsonResponse;

final class HomePresenter extends BaseApiPresenter
{

    public function renderdefault(): void
    {
        $this->sendJson("Y si me dices las palabras mágicas?");
    }
}
