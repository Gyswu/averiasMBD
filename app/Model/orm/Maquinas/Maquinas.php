<?php

namespace App\Model\Orm;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\OneHasMany;

/**
 * Maquina
 *
 * @property    int                     $id  {primary}
 * @property    string                  $modelo
 * @property    string|null             $ip
 * @property    string|null             $mascara
 * @property    string                  $vfirmware
 * @property    Empresa|null            $empresa {m:1 Empresa::$maquinas}
 * @property    Proveedor|null          $proveedor {m:1 Proveedor::$maquinas}
 * @property    string                  $fcompra
 * @property    int|null                $tipocontador
 * @property    int                     $estado
 * @property    int                     $origen
 * @property    string|null             $finicioservicio
 * @property    string|null             $ffinalservicio
 * @property    int|null                $tipocontrato
 * @property    int|null                $tipogarantia
 * @property    string|null             $comentario
 * @property    string|null             $firmwarebackup
 * @property    OneHasMany|Cambios[]    $cambios {1:m Cambios::$maquina}
 * @property    OneHasMany|Copias[]     $copias {1:m Copias::$maquina}
 * @property    string|null             $token
 * @property    string|null             $codegroups
 *
 */
class Maquinas extends Entity
{
}
