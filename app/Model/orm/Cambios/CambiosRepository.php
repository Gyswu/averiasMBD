<?php

namespace App\Model\Orm;

use Nextras\Orm\Repository\Repository;

/**
 * @method Cambios|NULL getById( $id )
 */

class CambiosRepository extends Repository {

    static function getEntityClassNames(): array {
        return [ Cambios::class ];
    }
}