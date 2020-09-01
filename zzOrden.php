
<?php
/* $array2 = array(
  array(
  array('Frank', 'Pepe', 'Luis', 'Raul'),
  array('Tiger', 'Mourin', 'Katz', 'Alberto')
  ),
  array(
  array('Suarez', 'Koltz', 'Fernandez', 'Ramirez')
  ), array(
  array('Higuita', 'Mel', 'Rubens', 'Messi'),
  array('Kostemiener', 'Lenkins', 'Marash', 'Juanes')
  )
  );




  for ($i = 0; $i < count($array2); $i++) {
  if($array2[0]==$array2[$i]){
  echo "<strong><br>España</strong> ";
  }elseif ($array2[1]==$array2[$i]) {
  echo "<strong><br>Mexico</strong> ";
  }elseif ($array2[2]==$array2[$i]) {
  echo "<strong><br>Argentina</strong> ";
  }
  for ($j = 0; $j < count($array2[$i]); $j++) {
  if($array2[$i][0]==$array2[$i][$j]){
  echo "<br>Equipo 1:<br> ";
  }elseif ($array2[$i][1]==$array2[$i][$j]) {
  echo "<br>Equipo 2:<br> ";
  }
  for ($t = 0; $t < count($array2[$i][$j]); $t++) {
  echo $array2[$i][$j][$t]." ,";
  }
  }
  }

  $array = array('España' => array(
  'Equipo_1' => array(
  'Portero' => 'Frank', 'Defensa' => 'Pepe', 'Medio' => 'Luis', 'Delantero' => 'Raul'),
  'Equipo_2' => array(
  'Portero' => 'Tiger', 'Defensa' => 'Mourin', 'Medio' => 'Katz', 'Delanto' => 'Alberto')
  ),
  'Mexico' => array(
  'Equipo_1' => array(
  'Portero' => 'Suarez', 'Defensa' => 'Koltz', 'Medio' => 'Fernandez', 'Delantero' => 'Ramirez')
  ),
  'Argentina' => array(
  'Equipo_1' => array(
  'Portero' => 'Higuita', 'Defensa' => 'Mel', 'Medio' => 'Rubens', 'Delantero' => 'Messi'),
  'Equipo_2' => array(
  'Portero' => 'Kostemiener', 'Defensa' => 'Lenkins', 'Medio' => 'Marash', 'Delantero' => 'Juanes')
  )
  );

  echo"<br><br>----------------------------------------";
  foreach ($array as $key=>$pais){
  echo "<br><br><strong>".$key."</strong>";
  foreach($pais as $equipo=>$equipito){
  echo "<br><strong>".$equipo.":</strong> ";
  foreach ($equipito as $algo){
  echo "$algo, ";
  }
  }
  } */
/*
  function sumar($n, $n1, $n2, $n3, $n4) {
  $suma = ($n + $n1 + $n2 + $n3 + $n4);
  echo $suma;
  }

  echo sumar(1, 2, 3, 4, 5);

  echo "<br><br><br>";

  function sumatoria($n, $n1, $n2, $n3, $n4) {
  $sumatoria = ($n + $n1 + $n2 + $n3 + $n4);
  return $sumatoria;
  }

  $tmp = sumatoria(2, 5, 1, 8, 10);

  echo$tmp."<br><br><br>";

  function calculo_volumen_cilindro($radio,$altura){
  $numeropi = 3.1416;
  $Volumen = $numeropi*$radio*$radio*$altura;
  return $Volumen;
  }

  echo "El volumen es: ".calculo_volumen_cilindro(1, 5);

 */

/*
  $time = time();
  echo date("d-m-Y (H:i:s)", $time);
  echo"<br><br><br>";

  $dia = date("F Y", $time);
  echo $dia;

  $dia_1 = date("D:d", $time);
  echo $dia_1;

  $valor1 = mktime(0, 0, 7, 1, 2020);
  $valor2 = mktime(0, 0, 7, 31, 2020);

  echo"<br><br><br>";

  for ($i = 1; $i <= 12; $i++) {
  for ($j = 1; $j <= 31; $j++) {
  $dia_f = mktime(0, 0, 0, $i, $j, 2020);
  echo date("D:d F Y", $dia_f) . "<br>";
  }
  }
 */
/*
  $diametro = $_REQUEST['diametro'];
  $altura = $_REQUEST['altura'];
  $radio = ($diametro/2);
  $volumen = 3.14*$radio*$radio*$altura;
  echo "El diametro es: $diametro<br>El radio es: $radio<br>La altura es: $altura<br> El volumen"
  . " de la pieza es: $volumen";
 */



$autos = array(
    array(
        'Marca' => 'Honda', 'Modelo' => 'Civic', 'anio' => '1996', 'Potencia' => '127'),
    array(
        'Marca' => 'Peugeot', 'Modelo' => '206 XR', 'anio' => '2003', 'Potencia' => '110'),
    array(
        'Marca' => 'Toyota', 'Modelo' => 'Corolla', 'anio' => '1992', 'Potencia' => '107'),
    array(
        'Marca' => 'Nissan', 'Modelo' => 'GTR', 'anio' => '2009', 'Potencia' => '480'),
    array(
        'Marca' => 'Ford', 'Modelo' => 'Mustang', 'anio' => '1964', 'Potencia' => '200'),
    array(
        'Marca' => 'Honda', 'Modelo' => 'Integra Type R', 'anio' => '2010', 'Potencia' => '225')
);
//var_dump($autos);

$ordenador = array(0, 1, 2, 3, 4, 5);

//var_dump($ordenador);


$long = count($ordenador);

for ($i = 0; $i < $long - 1; $i++) {
    for ($j = 0; $j < $long - $i - 1; $j++) {
        if ($autos[$ordenador[$j]]['anio'] > $autos[$ordenador[$j + 1]]['anio']) {
            swap($ordenador, $j);
        }
    }
}

function swap(&$array, &$condicion) {
    $tmp = $array[$condicion];
    $array[$condicion] = $array[$condicion + 1];
    $array[$condicion + 1] = $tmp;
}

//var_dump($ordenador);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/sharecolors.css" rel="stylesheet" type="text/css"/>
    </head>
    <div class="container col-lg-10 col-md-12 col-sm-12 mt-4">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Año</th>
                    <th scope="col">Potencia</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ordenador as $valor) {
                    echo"<tr>
            <th scope='row'>" . $valor . "</th>
                <td>" . $autos[$valor]['Marca'] . "</td>
                <td>" . $autos[$valor]['Modelo'] . "</td>
                <td>" . $autos[$valor]['anio'] . "</td>
                <td>" . $autos[$valor]['Potencia'] . " CV</td>
        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
</html>