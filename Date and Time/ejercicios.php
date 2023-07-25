<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <h1>Get a Date</h1> 
    <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>
    <hr>

    <hr>
    <h1>Copyright año</h1> 
    &copy; 2010-<?php echo date("Y");?>
    <hr>

    <hr>
    <h1>obtener un tiempo</h1> 
    <?php
    echo "The time is " . date("h:i:sa");
    ?>
    <hr>

    <hr>
    <h1>Obtenga su zona horaria</h1> 
    <?php
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");
    ?>
    <hr>

    <hr>
    <h1>Crear una fecha con mktime()</h1> 
    <?php
    $d=mktime(11, 14, 54, 8, 12, 2014);
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>
    <hr>

    <hr>
    <h1>Crear una fecha a partir de una cadena con strtotime()</h1> 
    <?php
    $d=strtotime("10:30pm April 15 2014");
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    ?>
    <hr>

    <hr>
    <h1>convertir una cadena en una fecha</h1> 
    <?php
    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    ?>
    <hr>

    <hr>
    <h1>Más ejemplos de fechas</h1> 
    <?php
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
    }
    ?>  
    <hr>

    <hr>
    <h1>muestra el número de días hasta el 22 de agosto:</h1> 
    <?php
    $d1=strtotime("August 22");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 22th of August.";
    ?>
    <hr>
</body>
</html>
