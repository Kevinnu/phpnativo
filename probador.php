<?php

$TEXTO = "TEXTO DE RELLENO A MODO DE EJEMPLO CON ESPACIOS";

ECHO "$TEXTO<BR><br>";

echo "Ahora vamos a imprimir el texto, pero sin espacios: ";

$reemplazo = str_replace(' ', '_', $TEXTO);

echo $reemplazo;

?>