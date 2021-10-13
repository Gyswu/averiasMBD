<?php


namespace App\Model;


class Listas
{
    public static function getPiezas() :array{
        $piezas = [
            '0' => 'Rodillos papel',
            '1' => 'Rodillos carga Tambor',
            '3' => 'Tambor',
            '4' => 'Revelador',
            '5' => 'Fusor',
            '6' => 'DP',
            '7' => 'Banda de transferencia',

        ];

        return $piezas;
    }

    public static function getColores() :array{
        $colores = [
            '0' => 'K',
            '1' => 'C',
            '2' => 'M',
            '3' => 'Y',
        ];
        return $colores;
    }

    public static function getCajones() :array{
        $cajones = [
            '0' => 'Cajon 1',
            '1' => 'Cajon 2',
            '2' => 'Cajon 3',
            '3' => 'Cajon 4'
        ];
        return $cajones;
    }

}