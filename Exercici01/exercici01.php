<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taula de multiplicar</title>
</head>
<body>
    <h2>Taula de multiplicar</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["numero"])) {
        $numero = trim($_GET["numero"]);

        $numero_valid = filter_var($numero, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 10)));

        if ($numero_valid === false) {
            echo "<p style='color: red;'>Error: El número ha de ser un enter entre 1 i 10.</p>";
            echo "<a href='exercici01.html'>Torna enrere</a>";
        } else {
            echo "<h3>Taula de multiplicar del $numero_valid</h3>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                $resultat = $numero_valid * $i;
                echo "<li>$numero_valid x $i = $resultat</li>";
            }
            echo "</ul>";
            echo "<a href='exercici01.html'>Torna enrere</a>";
        }
    } else {
        echo "<p>No s'ha rebut cap número.</p>";
        echo "<a href='exercici01.html'>Torna enrere</a>";
    }
    ?>
</body>
</html>
