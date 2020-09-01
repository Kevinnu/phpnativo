

<?php

$array = range(0, 10);

$busqueda = binary_search($array, 1);

if ($busqueda == NULL) {
    echo "No hay resultados";
} else {
    echo "Numero insertado: $busqueda<br> Hay resultado";
}

function binary_search($array, $valor) {
    $low = 0;
    $high = count($array) - 1;
    while ($low <= $high) {
        $puntomedio = floor(($low + $high) / 2);
        if ($array[$puntomedio] < $valor) {
            $low = $puntomedio + 1;
        } elseif ($array[$puntomedio] > $valor) {
            $high = $puntomedio - 1;
        } else {
            return $puntomedio;
        }
    }
    return NULL;
}

/* --------------------------------------------------------------------------- */


$nuevo_array = array('10', '2', '99', '3', '1', '7', '6', '33', '22', '4', '88');
echo"<br><br>Desordenado:<br>";
print_r($nuevo_array);
echo"<br><br>";

$ordenado = bubblesort($nuevo_array);


echo "<br>Ordenado:<br>";
print_r($ordenado);
var_dump($ordenado);

function bubblesort($array) {
    $longitud = count($array);
    for ($i = 0; $i < $longitud; $i++) {
        for ($j = 0; $j < $longitud - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $t = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $t;
            }
        }
    }
    return $array;
}
?>

<form method="GET" action="ordenamiento.php">
    <label for="diametro">Introduzca diametro</label>
    <input name="diametro" type="number">
    <lable for="altura">Introduzca altura</lable>
    <input name="altura" type="number">
    <button type="submit">Enviar</button>
</form>
