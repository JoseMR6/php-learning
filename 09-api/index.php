<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

//Inicualizar una nueva sesion de cURL; ch = cURL handle
$ch = curl_init(API_URL);

//Indicar que queremos recibir el resultado de la peticion y no mostrarla por pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//Ejecutar la peticion y guardar el resultado
$result = curl_exec($ch);

//forma reducida de obtener respuesta GET de una API
//$result = file_get_contents(API_URL);

$data = json_decode($result, true);

//cerrar handler de URL
curl_close($ch);

//var_dump($data);
?>

<head>
    <meta charset="UTF-8" />
    <title>La proxima pelicula de Marvel</title>
    <meta name="description" content="La proxima pelicula de marvel" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
    <section>
        <img 
            src="<?= $data["poster_url"]; ?>" width="200" alt="Poster de <?=$data["title"]; ?>"
            style="border-radius: 16px"
        />

        <hgroup>
            <h3><?=$data["title"]; ?> se estrena en <?= $data["days_until"] ?> dias</h3>
            <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
            <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
        </hgroup>
    </section>


</main>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img{
        margin: 0 auto;
    }
</style>