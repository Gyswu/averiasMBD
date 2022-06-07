<?php

namespace App\Model;

use Nette\Security\User;

class Menu {
    
    public static function getMenu (User $user) {
        
        $menu = [

            [
                'icon'    => 'bi bi-building',
                'nombre'  => 'Clientes',
                'mostrar' => $user->isAllowed(Roles::SECCION_EMPRESAS),
                'nhref'   => 'Empresas:default',
            ],
            [
                'icon' => 'bi bi-archive-fill',
                'nombre'  => 'Proveedores',
                'mostrar' => $user->isAllowed(Roles::SECCION_EMPRESAS),
                'nhref'   => 'Proveedores:default',
            ],
            [
                'icon' => 'bi bi-person-circle',
                'nombre'  => 'Usuarios',
                'mostrar' => $user->isAllowed(Roles::SECCION_USUARIOS),
                'nhref'   => 'Usuarios:default',
            ],
//            [
//                'icon' => '',
//                'nombre'  => 'Averias',
//                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
//                'nhref'   => 'Averias:default',
//            ],
            [
                'icon' => 'bi bi-printer',
                'nombre'  => 'Maquinas',
                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
                'nhref'   => 'Maquinas:default',
            ],
            [
                'icon' => 'bi bi-wrench',
                'nombre'  => 'Cambios',
                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
                'nhref'   => 'Piezas:default',
            ],
            [
                'icon' => 'bi bi-info-circle-fill',
                'nombre'  => 'Resumen',
                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
                'nhref'   => 'Resumen:default',
            ],
            [
                'icon' => 'bi bi-file-code-fill',
                'nombre'  => 'Funciones',
                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
                'nhref'   => 'Generalfunctions:default',
            ]

        ];
        
        return $menu;
    }

    public static function getMenuUser (User $user) {

        $menu = [

            [
                'icon' => '',
                'nombre'  => 'Admin',
                'mostrar' => $user->isAllowed(Roles::SECCION_EMPRESAS),
                'nhref'   => 'Admin:Homepage:default',
            ],
            [
                'icon' => '',
                'nombre'  => 'Empresa',
                'mostrar' => $user->isAllowed(Roles::SECCION_EMPRESAS),
                'nhref'   => 'Empresas:default',
            ],

//            [
//                'icon' => '',
//                'nombre'  => 'Averias',
//                'mostrar' => $user->isAllowed(Roles::SECCION_AVERIAS),
//                'nhref'   => 'Averias:default',
//            ]

        ];

        return $menu;
    }
    
}
