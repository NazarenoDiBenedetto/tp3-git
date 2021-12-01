<?php
$sueldo = $_GET['sueldo'];
$horas  = $_GET['horas'];

$Pporhora = $sueldo/$horas;

?>
<!DOCTYPE html>
<html>
    <head>
     <title>TP3hora</title>
     <meta charset="UTF-8">
    </head>
    <body>
     <?php echo "<p>Se te paga la hora = $Pporhora </p>"; ?>
    </body>
</html>
