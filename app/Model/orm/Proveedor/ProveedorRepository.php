<?php

namespace App\Model\Orm;

use Nextras\Orm\Repository\Repository;

/**
 * @method Proveedor|NULL getById( $id )
 */
class ProveedorRepository extends Repository {

    static function getEntityClassNames(): array {
        return [ Proveedor::class ];
    }
}