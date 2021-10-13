<?php

namespace App\Model\Orm;

use Nextras\Orm\Entity\Entity;

/**
 * Averia
 *
 * @property    int    $id  {primary}
 * @property    Usuario         $usuario   {m:1 Usuario::$averias}
 * @property    string          $fechainicio
 * @property    string|null     $fechafinal
 * @property    string          $descripcion
 * @property    string|null     $aparato
 * @property    string|null     $marca
 * @property    string|null     $modelo
 * @property    string|null     $numeroserie
 * @property    string|null     $resolucion
 * @property    float|null      $insitu
 * @property   float|null       $horasfuera
 * @property    int|null        $estado
 */
class Averias extends Entity {

}