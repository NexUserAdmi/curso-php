<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Evitar mensaje null por certificados
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
/* Ejecutar la petición
y guardamos el resultado*/
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
// var_dump($data);
?>

<head>
    <meta charset="UTF-8"/>
    <title>La proxima pelicula de Marvel</title>
    <meta description="La proxima pelicula de Marvel"/>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
</head>

<main>
    <section>
        <img src="<?= $data["poster_url"] ?>" width="300" alt="Poster de <?= $data["title"]?>" style="border-radius: 16px"/>
    </section>

    <hgroup>
        <h3><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> dias</h3>
        <p>Fecha de estreno: <?= $data["release_date"] ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"] ?></p>
    </hgroup>
</main>
<style>
    :root { 
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    img{
        margin: 0px auto;
    }
    section{
        display: flex;
        justify-content: flex-start; 
    }
    hgroup{
        display: flex;
        flex-direction: column;
        text-align: center;
    }
</style>