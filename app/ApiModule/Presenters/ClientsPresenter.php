<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

use App\Model\Orm\Clients;
use DateTime;
use Nette\Utils\Json;

final class ClientsPresenter extends BaseApiPresenter
{
    private function getAllClients(){
        $data = $this->orm->empresa->findAll();
        return $data;
    }

    public function actionAll($token, $mode){
        if ($this->ifUserToken($token)){
            $data = array();
            $clients = $this->getAllClients();
            foreach ($clients as $client){
                $clientToArray = $client->toArray();
                $clientToArray[usuarios] = count($client->usuarios);
                $clientToArray[maquinas] = count($client->maquinas);
                if($client->telefono == ""){
                    $clientToArray[telefono] = " ";
                }
                if($client->contacto == ""){
                    $clientToArray[contacto] = " ";
                }
                array_push($data, $clientToArray);
            }
        } else {
            $data = "dime la palabra magica";
        }
        $this->sendJson($data);
    }

}