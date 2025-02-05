<?php
    $name = "Miguel";
    $isDev = true;
    $age = 39;
    $age = "39";
    $age = 39 + "1";
    var_dump($name); //Muestra tipo y valor
    var_dump($age);
    echo var_dump($isDev);
    echo is_bool($isDev);
    echo is_integer($name);
    $output = "Hola soy $name";
    $output .= ". Tengo $age de edad.";
    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');
    const nombre = 'Miguel'; #No se pueden usar constantes en tiempo de ejecucion. Solo el tiempo de compilacion
    $isOld = $age > 48; 
?>
<img src="<?= LOGO_URL?>" alt="PHP Logo" width="200">
<h1>
    <?= "Esta es mi primera pagina con HTML."?>  
</h1>
<h1>
    <?= $output ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>