<?php

namespace App\Model\Orm;

use Nextras\Orm\Repository\Repository;

/**
 * @method Copias|NULL getById( $id )
 */

class CopiasRepository extends Repository {

    static function getEntityClassNames(): array {
        return [ Copias::class ];
    }
}