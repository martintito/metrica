<?php

class ChangeString {
   
    public static $alfabeto = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 
        'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r',
        's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    static function build($cadena) {
        for ($i = 0; $i < strlen($cadena); ++$i) {
            $cadena[$i] = self::letra($cadena[$i]);
        }
        return $cadena;
    }

    protected function letra($c) {     
        $isUpper = ($c == strtoupper($c));
        $posicion = array_search(strtolower($c), self::$alfabeto);
        if ($posicion === false){//si la letra analizada no existe devuelve la misma
            return $c;
        }          
        
        if ($posicion == count(self::$alfabeto) - 1){ //si la letra analizada es la de la ultima posicion, z
                                                      //se reemplaza por a
            $posicion = 0;
        }
        else{
            $posicion = $posicion + 1;//en cualquier otro caso la letra se reemplaza por la letra de la siguiente posicion        
        }
        
        if ($isUpper){
            return strtoupper(self::$alfabeto[$posicion]);            
        }else{
            return self::$alfabeto[$posicion];
        }        
    }
}



echo "<table style='width:100%' border='1'>";
echo "<tr><th colspan='2'>Problema 01</th></tr>";
echo "<tr><th>Entrada</th><th>Salida</th></tr>";
echo "<tr>";
echo "<td>'123 abcd*3'</td>";
echo "<td>'".ChangeString::build("123 abcd*3")."'</td>";
echo "</tr>";

echo "<tr>";
echo "<td>'**Casa 52'</td>";
echo "<td>'".ChangeString::build("**Casa 52")."'</td>";
echo "</tr>";

echo "<tr>";
echo "<td>'**Casa 52Z'</td>";
echo "<td>'".ChangeString::build("**Casa 52Z")."'</td>";
echo "</tr>";

echo "<tr>";
echo "<td>'abc***ABDCBA'</td>";
echo "<td>'".ChangeString::build("abc***ABDCBA")."'</td>";
echo "</tr>";

echo "</table>";
