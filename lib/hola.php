<?php
// Autor: Marc Ibañez  <marc@uco.es>
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>
