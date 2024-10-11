<?php
define('LOGO_URL', 'https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');
const NOMBRE = 'Manolo';

$name = "Pedro";
$isDev = true;
$age = 20;
$newAge = $age + '1';

$isOld = $age > 40;

if ($isOld) {
    echo "<h2>Eres viejo</h2>";
} else if ($isDev) {
    echo "<h2>Eres Dev</h2>";
} else {
    echo "<h2>Eres joven</h2>";
}

$output = "Hola $name, con una edad de $newAge";

$outputAge = $isOld
    ? 'Eres viejo'
    : 'Eres joven';

echo "<h2>$outputAge</h2>";

$outputAge = match($age){
    0,1,2 => "bebé",
    3,4,5,6,7,8,9,10 => "niño",
    10,11,12,13,14,15,16,17,18 => "adolescente",
    default => "adulto",
};

echo "<h2>$outputAge</h2>";

$outputAge = match(true){
    $age < 2 => "bebé",
    $age < 10 => "niño",
    $age < 18 => "adolescente",
    $age == 18 => "mayor de edad",
    $age < 40 => "adulto joven",
    default => "adulto",
};

echo "<h2>$outputAge</h2>";


$bestLanguajes = ["PHP","JavaScript","Python"];
$bestLanguajes[] = "Java";
$bestLanguajes[] = "TypeScript";

$person =[
    "name" => "Miguel",
    "age" => 76,
    "isDev" => true,
    "languajes" => ["PHP","JavaScript","Python"]
];
?>

<ul>
    <?php foreach ($bestLanguajes as $key => $languaje) : ?>
        <li><?= $key." ".$languaje ?></li>
    <?php endforeach; ?>
</ul>

<ul>
    <?php foreach ($person as $key => $propiedad) : ?>
        <li><?= $key.": ".$propiedad ?></li>
    <?php endforeach; ?>
</ul>

<?php if ($isOld) : ?>
    <h2>Eres viejo</h2>
<?php elseif ($isDev) : ?>
    <h2>Eres Dev</h2>
<?php else : ?>
    <h2>Eres joven</h2>
<?php endif; ?>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200" />
<h1>
    <?= "Hola " . NOMBRE; ?>
</h1>
<h1>
    <?= $output; ?>
</h1>

<p>
    <?php
    var_dump($name);
    echo "<br/>";
    echo "isDev: " . gettype($isDev) . "<br/>";
    echo "Es desarrollador: " . $isDev . "<br/>";
    echo "Edad es int: " . is_int($age) . "<br/>";
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