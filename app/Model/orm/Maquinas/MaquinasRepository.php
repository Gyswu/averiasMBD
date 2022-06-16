<?php

namespace App\Model\Orm;

use Nextras\Orm\Repository\Repository;

/**
 * @method Maquinas|NULL getById( $id )
 */

class MaquinasRepository extends Repository
{

    static function getEntityClassNames(): array
    {
        return [Maquinas::class];
    }

    public function findByToken($token)
    {
        return $this->findBy(["token" => $token])->fetch();
    }

    public function getConfiguredState()
    {
        return count($this->findBy(["confstate" => true, "estado" => "3"]));
    }

    public function getNotBlankQuantity(){
        return count($this->findBy(["modelo!=" => "blank", "estado" => "3"]));
    }
}
