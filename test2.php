<?php
$name = "Miguel";
$isDev = true;
$age = 39;
$output = "Hola soy $name";
$output .= ". Tengo $age de edad.";
#CONSTANTES
#No se pueden usar constantes en tiempo de ejecucion. Solo el tiempo de compilacion
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg'); #Constante global
const nombre = 'Miguel'; #Constantes locales  
#IF
#Hay 3 maneras de trabajar con IF, la comun, la que va con etiqueta, y la ternaria
$isOld = $age > 48;
if ($isOld) {
    echo "<h2> Lo siento, eres viejo!</h2>";
} else if ($isDev) {
    echo "<h2> Enhorabuena  colega!</h2>";
} else {
    echo "Disfruta la vida";
}
#MATCH
$age = 3;
echo match (true) {
    $age < 2 => "Eres un bebe," . $name,
    $age < 10 => "Eres un ninio," . $name,
    $age < 18 => "Eres un adolescente," . $name,
    $age == 18 => "Eres mayor de edad," . $name,
    $age < 40 => "Eres un adulto joven," . $name,
    $age >= 40 => "Eres un adulto viejo" . $name,
    default => "Hueles mas a fruta que a fruta,",
};
#ARREGLOS
$bestLanguajes = ["PHP", "JavaScript", "Python"];
$bestLanguajes[3] = "Java";
$bestLanguajes[] = "TypeScript"; #Lo agrega al final
#SIMULANDO DICCIONARIOS
$person = [
    "name" => "Miguel",
    "age" => 78,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "Python"]
];
$person["name"] = "pheralb";
$person["languages"][] = "Java";
?>
<ul>
    <?php foreach ($bestLanguajes as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>
    Yo: <?= $output ?>
</h1>
<h1>Robot: <?= "Hola $name" ?></h1>

<?php if ($isOld) : ?>
    <h2> Robot: Lo siento, eres viejo!</h2>
<?php elseif ($isDev) : ?>
    <h2> Robot: Enhorabuena colega!</h2>
<?php else: ?>
    <h2> Robot: Disfruta la vida</h2>
<?php endif; ?>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>