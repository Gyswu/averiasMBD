<?php

namespace App\Model\Orm;

use Nextras\Orm\Collection\ICollection;
use Nextras\Orm\Mapper\Mapper;

class CopiasMapper extends Mapper
{

    protected $tableName = 'Copia';

    public function getReport(): ICollection
    {
        return $this->toCollection($this->connection->query("
            SELECT * 
            FROM Copia 
            JOIN ( 
                SELECT max(id) as maxid FROM `Copia` GROUP BY maquina 
                ) as pt 
            ON pt.maxid = id 
        "))
            ->orderBy("this->maquina->empresa->nombre")
            ->orderBy("this->maquina->modelo");
    }

    public function getReportByFacturationGroup(): ICollection
    {
        return $this->toCollection($this->connection->query("
            SELECT * 
            FROM Copia 
            JOIN ( 
                SELECT max(id) as maxid FROM `Copia` GROUP BY maquina 
                ) as pt 
            ON pt.maxid = id 
        "))
                    ->orderBy("this->maquina->empresa->nombre")
                    ->orderBy("this->maquina->modelo")
        ;
    }
}
