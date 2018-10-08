<?php

class ClearPar {

    static function build($arreglo) {
        $estado = 0;
        $salida = '';
        for ($i = 0; $i < strlen($arreglo); ++$i) { //recorre cada uno de los elementos del arreglo
            if ($estado == 0 && $arreglo[$i] == '(') { //si estado = 0 y elemento actual es '(' 
                                                        // -> estado = 1 y esperamos un ')'
                $estado = 1;
            } else if ($estado == 1 && $arreglo[$i] == ')') { //si el estado = 1 y elemento actual es ')' 
                                                                //-> estado = 0 y agregamos a la salida '()' Volver a empezar
                $salida .= '()';
                $estado = 0;
            }
        }
        return $salida;
    }
}

echo "<table style='width:100%' border='1'>";
echo "<tr><th colspan='2'>Problema 03</th></tr>";
echo "<tr><th>Entrada</th><th>Salida</th></tr>";
echo "<tr>";
echo "<td>'()())()'</td>";
echo "<td>'".ClearPar::build("()())()")."'</td>";
echo "</tr>";

echo "<tr>";
echo "<td>'()(()'</td>";
echo "<td>'".ClearPar::build("()(()")."'</td>";
echo "</tr>";

echo "<tr>";
echo "<td>')('</td>";
echo "<td>'".ClearPar::build(")(")."'</td>";
echo "</tr>";

echo "<tr>";
echo "<td>'((()'</td>";
echo "<td>'".ClearPar::build("((()")."'</td>";
echo "</tr>";

echo "</table>";