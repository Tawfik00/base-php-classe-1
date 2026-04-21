<?php
//code php en début de fichier
$date = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Date : <?= $date ?> </h1>
    <p> Il est <?= date("H:i:s") ?> </p>
    
</body>
</html>