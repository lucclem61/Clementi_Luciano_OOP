<?php

spl_autoload_register(function ($class) {

    $class = str_replace('MyProject\\', '', $class);
    $class = str_replace("\\", DIRECTORY_SEPARATOR, $class);

    $filepath = __DIR__ . '/includes/classes/' . $class . '.php';

    if (file_exists($filepath)) {
        require_once $filepath;
    }
});

require_once __DIR__ . '/includes/traits/TunableTrait.php';

$guitar = new MyProject\Instrument\Guitar("Guitar", "Wood", "Spain");
$violin = new MyProject\Instrument\Violin("Violin", "Wood", "Italy");
$drum = new MyProject\Instrument\Drum("Drum", "Metal", "Africa");
$flute = new MyProject\Instrument\Flute("Flute", "Silver", "China");

?>

<!DOCTYPE html>
<html>
<body>

<h3>Instrument Demo</h3>

<?php
$guitar->describe();
$guitar->play();
echo "<p>" . $guitar->tune() . "</p>";

$violin->describe();
$drum->describe();
$flute->describe();
?>

</body>
</html>