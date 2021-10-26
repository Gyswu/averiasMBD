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
 * @property    string|null   $contacto
 * @property    OneHasMany|Usuario[] $usuarios {1:m Usuario::$empresa}
 * @property    OneHasMany|Maquinas[] $maquinas {1:m Maquinas::$empresa}
 */

//orm mas nombre de funcion para llamar a metodo en formfactory

class Empresa extends Entity {



}