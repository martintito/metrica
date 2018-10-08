<?php

class CompleteRange {

    static function build($arreglo) {
        $num_elementos = count($arreglo);
        if ($num_elementos == 0) {
            return [];
        } else {
            $inicio = $arreglo[0];
            $fin = $arreglo[$num_elementos - 1];
            return range($inicio, $fin, 1);
        }
    }

}

$output1 = CompleteRange::build([1, 2, 4, 5]);
$output2 = CompleteRange::build([2, 4, 9]);
$output3 = CompleteRange::build([55, 58, 60]);

echo "<table style='width:100%' border='1'>";
echo "<tr><th colspan='2'>Problema 02</th></tr>";
echo "<tr><th>Entrada</th><th>Salida</th></tr>";
echo "<tr>";
echo "<td>'[1 2 4 5]'</td>";
echo "<td>'[";
foreach ($output1 as &$valor) {
    echo $valor.' ';
}
echo "]'</td>";
echo "</tr>";

echo "<tr>";
echo "<td>'[2 4 9]'</td>";
echo "<td>'[";
foreach ($output2 as &$valor) {
    echo $valor.' ';
}
echo "]'</td>";
echo "</tr>";

echo "<tr>";
echo "<td>'[55 58 60]'</td>";
echo "<td>'[";
foreach ($output3 as &$valor) {
    echo $valor.' ';
}
echo "]'</td>";
echo "</tr>";

echo "</table>";
