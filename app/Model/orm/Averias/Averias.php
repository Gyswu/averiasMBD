<?php

namespace App\Model\Orm;

use Nextras\Orm\Entity\Entity;

/**
 * Averia
 *
 * @property    int    $id  {primary}
 * @property    Usuario         $usuario   {m:1 Usuario::$averias}
 * @property    string          $fechaInicio
 * @property    string          $fechaFinal
 * @property    string          $descripcion
 * @property    string|null     $aparato
 * @property    string|null     $marca
 * @property    string|null     $modelo
 * @property    string|null     $numeroSerie
 * @property    string|null     $resolucion
 * @property    float|null      $horas
 * @property    int|null        $estado
 */
class Averias extends Entity {

}