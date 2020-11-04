<?php

namespace App\Model\Orm;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\OneHasMany;

/**
 * Empresa
 *
 * @property    int    $id  {primary}
 * @property    string|null   $nif
 * @property    string         $nombre
 * @property    int|null    $telefono
 * @property    string|null   $direccion
 * @property    OneHasMany|Usuario[] $usuarios {1:m Usuario::$empresa}
 */

 class Empresa extends Entity {

}