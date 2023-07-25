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
    <h1>archivo PHP - fopen</h1>
    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);
    ?>
    <hr>

    <hr>
    <h1>archivo PHP - fopen</h1>
    <?php
    $myfile = fopen("webdictionary.txt", "r");
    // some code to be executed....
    fclose($myfile);
    ?>
    <hr>


    <hr>
    <h1>Leer una sola línea - fgets</h1>
    <?php
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
    ?>
   <hr>

   <hr>
   <h1></h1>
   <?php
   $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
    ?>
   <hr>

   <hr>
   <h1></h1>
   <?php
   $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
   // Output one character until end-of-file
   while(!feof($myfile)) {
   echo fgetc($myfile);
   }
   fclose($myfile);
   ?>
   <hr>

   

</body>
</html>