<?php

namespace App\Model\Orm;

use Nextras\Orm\Entity\Entity;

use Nextras\Orm\Relationships\OneHasMany;


/**
 * Proveedor
 *
 * @property    int                     $id  {primary}
 * @property    string                  $nombre
 * @property    int|null                $telefono
 * @property    string|null             $nif
 * @property    string|null             $direccion
 * @property    OneHasMany|Maquinas[]   $maquinas {1:m Maquinas::$proveedor}
 */

class Proveedor extends Entity {



}