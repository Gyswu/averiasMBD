<?php

namespace App\Model\Orm;

use Nextras\Orm\Repository\Repository;

/**
 * @method Copias|NULL getById( $id )
 * @method Copias|NULL getReport()
 */

class CopiasRepository extends Repository
{

    static function getEntityClassNames(): array
    {
        return [Copias::class];
    }

    public function findLastByPrinterId($printerId)
    {
        return $this->findBy(['maquina' => $printerId])->orderBy("id", "DESC")->fetch();
    }
    
    public function findFirstByPrinterId($printerId)
    {
        return $this->findBy(['maquina' => $printerId])->orderBy("id", "ASC")->fetch();
    }
}
