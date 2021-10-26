<?php

namespace App\Model\Orm;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\OneHasMany;

/**
 * Copia
 *
 * @property    int         $id  {primary}
 * @property    string      $fecha
 * @property    int|null    $copiasbn
 * @property    int|null    $copiascl
 * @property    int|null    $copiasl
 * @property    int|null    $copiasll
 * @property    int|null    $copiaslll
 * @property    int         $escaneos
 * @property    Maquinas    $maquina {m:1 Maquinas::$copias}
 *
 */
class Copias extends Entity {

}