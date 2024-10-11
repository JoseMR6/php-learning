<?php
$name = "Pedro";
$isDev = true;
$age = 39;
$newAge = $age + '1';
?>

<h1>
    <?php echo "Mi primera app";?>
</h1>

<p>
<?php 
echo "Usuario: ".$name."<br/>"; 
echo "Es desarrollador: ".$isDev."<br/>";
echo "Edad: ".$age."<br/>"; 
?>
<?= $newAge; ?>
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