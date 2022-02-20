<?php


namespace App\Model;


class Listas
{
    public static function getPiezas()
    {
        $piezas = [
            '0' => '',
            '11' => 'Rodillos carga Papel Cajon 1',
            '12' => 'Rodillos carga Papel Cajon 2',
            '13' => 'Rodillos carga Papel Cajon 3',
            '14' => 'Rodillos carga Papel Cajon 4',
            '2' => 'Rodillo carga Tambor',
            '20' => 'Rodillo carga Tambor K',
            '21' => 'Rodillo carga Tambor C',
            '22' => 'Rodillo carga Tambor M',
            '23' => 'Rodillo carga Tambor Y',
            '3' => 'Tambor',
            '30' => 'Tambor K',
            '31' => 'Tambor C',
            '32' => 'Tambor M',
            '33' => 'Tambor Y',
            '4' => 'Revelador',
            '40' => 'Revelador K',
            '41' => 'Revelador C',
            '42' => 'Revelador M',
            '43' => 'Revelador Y',
            '5' => 'Fusor',
            '6' => 'Duplex',
            '7' => 'Banda de transferencia',
            '8' => 'Alimentador',

        ];

        return $piezas;
    }
    public static function getPieza($num)
    {
        $piezas = [
            '0' => '',
            '11' => 'Rodillos carga Papel Cajon 1',
            '12' => 'Rodillos carga Papel Cajon 2',
            '13' => 'Rodillos carga Papel Cajon 3',
            '14' => 'Rodillos carga Papel Cajon 4',
            '2' => 'Rodillo carga Tambor',
            '20' => 'Rodillo carga Tambor K',
            '21' => 'Rodillo carga Tambor C',
            '22' => 'Rodillo carga Tambor M',
            '23' => 'Rodillo carga Tambor Y',
            '3' => 'Tambor',
            '30' => 'Tambor K',
            '31' => 'Tambor C',
            '32' => 'Tambor M',
            '33' => 'Tambor Y',
            '4' => 'Revelador',
            '40' => 'Revelador K',
            '41' => 'Revelador C',
            '42' => 'Revelador M',
            '43' => 'Revelador Y',
            '5' => 'Fusor',
            '6' => 'Duplex',
            '7' => 'Banda de transferencia',
            '8' => 'Alimentador',


        ];

        return $piezas[$num];
    }

    public static function getColores()
    {
        $colores = [
            '0' => 'K',
            '1' => 'C',
            '2' => 'M',
            '3' => 'Y',
        ];
        return $colores;
    }

    public static function getCajones()
    {
        $cajones = [
            '0' => 'Cajon 1',
            '1' => 'Cajon 2',
            '2' => 'Cajon 3',
            '3' => 'Cajon 4'
        ];
        return $cajones;
    }
}
