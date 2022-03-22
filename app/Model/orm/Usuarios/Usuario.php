<?php

namespace App\Model\Orm;

use Nextras\Orm\Entity\Entity;
use Nextras\Orm\Relationships\OneHasMany;

/**
 * Usuario
 *
 * @property    int    $id  {primary}
 * @property    Empresa|null       $empresa  {m:1 Empresa::$usuarios}
 * @property    OneHasMany|Averias[] $averias {1:m Averias::$usuario}
 * @property    string|null   $nombre
 * @property    string|null   $apellidos
 * @property    string|null   $correo
 * @property    string|null   $password
 * @property    string|null   $rol
 * @property    int|null    $telefono
 * @property    int|null    $extensiontelefono
 * @property    string|null    $token
 */
class Usuario extends Entity {

}