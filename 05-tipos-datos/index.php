<?php
$name = "Pedro";
$isDev = true;
$age = 39;
$newAge = $age + '1';

$output = "Hola $name, con una edad de $newAge";
?>

<h1>
    <?= "Hola " . $name;?>
</h1>
<h1>
    <?= $output;?>
</h1>

<p>
<?php 
var_dump($name); echo "<br/>";
echo "isDev: ".gettype($isDev)."<br/>"; 
echo "Es desarrollador: ".$isDev."<br/>";
echo "Edad es int: ".is_int($age)."<br/>"; 
?>
</p>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>