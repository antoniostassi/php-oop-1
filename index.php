<?php 
require __DIR__.'/classes/Movie.php';

$movieList = [$inception, $piratesOfCaribbean];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach ($movieList as $key => $value) {
           echo "<h1>".$value->title."</h1>"; var_dump($value, $key); ?>
           <br> 
           <hr>
           <?php
        };
    ?>
</body>
</html>