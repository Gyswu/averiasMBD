<?php

namespace App\AdminModule\Presenters;

use App\Forms\AveriasFormFactory;
use App\Model\Orm\Averias;
use App\Model\Listas;
use App\Model\Orm\Maquinas;
use Exception;
use Nette\Application\UI\Form;
use Nextras\Orm\Collection\ICollection;
use Psr\Log\NullLogger;
use stdClass;

class GeneralfunctionsPresenter extends BaseAdminPresenter
{

    public function renderDefault(): void
    {
    }

    public function actionGenerateTokens()
    {

        $maquinas = $this->orm->maquinas->findAll();
        $maquina = new Maquinas();
        foreach ($maquinas as $maquina) {
            if ($maquina->token == null) {
                $listas = new Listas();
                $secreto = md5($listas->generateRandomString(32));
                $maquina->token = $secreto;
                $this->orm->maquinas->persistAndFlush($maquina);
            }
        }

        $this->redirect("Generalfunctions:default");
    }

    public function actionGenerateCodeGroups()
    {

        $maquinas = $this->orm->maquinas->findAll();
        $maquina = new Maquinas();
        foreach ($maquinas as $maquina) {
            if ($maquina->tipocontador == 0) {

                $maquina->codegroups = '[
                                            {
                                                "type": "copiasbn",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.3.1.1.1.1.2",
                                                    "1.3.6.1.4.1.1347.42.3.1.1.1.1.1"
                                                ]
                                            },
                                            {
                                                "type": "escaneos",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.3.1.3.1.1.2",
                                                    "1.3.6.1.4.1.1347.42.3.1.4.1.1.1"
                                                ]
                                            }                
                                        ]
                                        ';

            }
            if ($maquina->tipocontador == 1) {

                $maquina->codegroups = '[
                                            {
                                                "type": "copiasbn",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.3.1.2.1.1.1.1",
                                                    "1.3.6.1.4.1.1347.42.3.1.2.1.1.2.1"
                                                ]
                                            },
                                            {
                                                "type": "copiascl",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.3.1.2.1.1.1.3",
                                                    "1.3.6.1.4.1.1347.42.3.1.2.1.1.2.3"
                                                ]
                                            },
                                            {
                                                "type": "escaneos",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.3.1.3.1.1.2",
                                                    "1.3.6.1.4.1.1347.42.3.1.4.1.1.1"
                                                ]
                                            }                
                                        ]
                                        ';

            }
            if ($maquina->tipocontador == 2) {

                $maquina->codegroups = '[
                                            {
                                                "type": "copiasbn",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.3.1.2.1.1.1.1",
                                                    "1.3.6.1.4.1.1347.42.3.1.2.1.1.2.1"
                                                ]
                                            },
                                            {
                                                "type": "copiascl",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.3.1.2.1.1.1.3",
                                                    "1.3.6.1.4.1.1347.42.3.1.2.1.1.2.3"
                                                ]
                                            },
                                            {
                                                "type": "copiasl",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.2.4.1.1.1.1.2",
                                                    "1.3.6.1.4.1.1347.42.2.4.1.1.1.1.1"
                                                ]
                                            },
                                            {
                                                "type": "copiasll",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.2.4.1.1.2.1.2",
                                                    "1.3.6.1.4.1.1347.42.2.4.1.1.2.1.1"
                                                ]
                                            },
                                            {
                                                "type": "copiaslll",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.2.4.1.1.3.1.2",
                                                    "1.3.6.1.4.1.1347.42.2.4.1.1.3.1.1"
                                                ]
                                            },
                                            
                                            {
                                                "type": "escaneos",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.42.3.1.3.1.1.2",
                                                    "1.3.6.1.4.1.1347.42.3.1.4.1.1.1"
                                                ]
                                            }                
                                        ]
                                        ';

            } //if tipocontador 2
            if ($maquina->tipocontador == 3) {

                $maquina->codegroups = '[
                                            {
                                                "type": "copiasbn",
                                                "codes": [
                                                    "1.3.6.1.4.1.1347.43.10.1.1.12.1.1"
                                                ]
                                            }             
                                        ]
                                        ';

            } //if tipocontador 3
            $this->orm->maquinas->persistAndFlush($maquina);
        } //foreach maquina
        $this->redirect("Generalfunctions:default");
    } //actionGenerateCodeGroups
}//presenter˘
