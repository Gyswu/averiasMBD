<?php

namespace App\Model;

use Nette\Security\User;

class Menu {
    
    public static function getMenu (User $user) {
        
        $menu = [

            [
                'nombre'  => 'Empresas',
                'mostrar' => $user->isAllowed(Roles::SECCION_EMPRESAS),
                'nhref'   => 'Empresas:default',
            ],
            [
                'nombre'  => 'Usuarios',
                'mostrar' => $user->isAllowed(Roles::SECCION_USUARIOS),
                'nhref'   => 'Usuarios:default',
            ],
            [
                'nombre'  => 'Averias',
                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
                'nhref'   => 'Averias:default',
            ]

            /*[
                'nombre'  => 'Historico',
                'mostrar' => $user->isAllowed(Roles::SECCION_HISTORICOS),
                'nhref'   => 'Historico:default',
            ]*/

        ];
        
        return $menu;
    }
    public static function getMenuUser (User $user) {

        $menu = [
            [
                'nombre'  => 'Empresas',
                'mostrar' => $user->isAllowed(Roles::SECCION_EMPRESAS),
                'nhref'   => 'Empresas:default',
            ],

            /*[
                'nombre'  => 'Usuarios',
                'mostrar' => $user->isAllowed(Roles::SECCION_USUARIOS),
                'nhref'   => 'Usuarios:default',
            ]*/

            [
                'nombre'  => 'Averias',
                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
                'nhref'   => 'Averias:default',
            ]

            /*[
                'nombre'  => 'Historico',
                'mostrar' => $user->isAllowed(Roles::SECCION_HISTORICOS),
                'nhref'   => 'Historico:default',
            ]*/

        ];

        return $menu;
    }
    
}
