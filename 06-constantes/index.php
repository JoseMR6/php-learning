<?php
define('LOGO_URL','https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');
const NOMBRE = 'Manolo';

$name = "Pedro";
$isDev = true;
$age = 39;
$newAge = $age + '1';

$output = "Hola $name, con una edad de $newAge";
?>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200"/>
<h1>
    <?= "Hola " . NOMBRE;?>
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