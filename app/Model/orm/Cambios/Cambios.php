<?php

namespace App\Model\Orm;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\OneHasMany;

/**
 * Cambio
 *
 * @property    int                 $id  {primary}
 * @property    Maquinas            $maquina {m:1 Maquinas::$cambios}
 * @property    int|null            $pieza
 * @property    int|null            $origen
 * @property    int                 $tecnico
 * @property    int|null            $copias
 * @property    string|null         $causa
 * @property    int|null            $garantia
 */
class Cambios extends Entity {


}