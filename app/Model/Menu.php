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
            ],
            [
                'nombre'  => 'Maquinas',
                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
                'nhref'   => 'Maquinas:default',
            ]

        ];
        
        return $menu;
    }

    public static function getMenuUser (User $user) {

        $menu = [

            [
                'nombre'  => 'Empresa',
                'mostrar' => $user->isAllowed(Roles::SECCION_EMPRESAS),
                'nhref'   => 'Empresas:default',
            ],

            [
                'nombre'  => 'Averias',
                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
                'nhref'   => 'Averias:default',
            ]

        ];

        return $menu;
    }
    
}
