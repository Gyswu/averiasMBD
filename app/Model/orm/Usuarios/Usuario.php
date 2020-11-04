<?php

namespace App\Model\Orm;

use Nextras\Orm\Entity\Entity;

/**
 * Usuario
 *
 * @property    int    $id  {primary}
 * @property    Empresa       $empresa  {m:1 Empresa::$usuarios}
 * @property    string|null   $nombre
 * @property    string|null   $apellidos
 * @property    string|null   $correo
 * @property    string|null   $password
 * @property    string|null   $rol
 * @property    int|null    $telefono
 * @property    int|null    $extensionTelefono
 */
class Usuario extends Entity {

}