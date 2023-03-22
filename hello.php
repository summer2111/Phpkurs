<?php
$name = "";
$family = "";

//Array
$items = [];


if(isset($_GET["name"])) {
    $name = $_GET["name"];
}
else {
    $name = "Max";
}
if(isset($_GET["family"])) {
    $family = $_GET["family"];
}
else {
    $family = "Mustermann";
}
if(isset($_GET["counter"])) {
    $counter = $_GET["counter"];
}
if($counter > 0) {
    for($i = 0; $i < $counter ; $i++) {
        $items[] = rand();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?=$name?>,<?=$family?>!!!!</h1>

    <ul>
        <?php foreach($items as $myRandom) :?>
        <li><?=$myRandom?></li>
        <?php endforeach ?>
           
    </ul>

</body>
</html>