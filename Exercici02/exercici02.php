<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultats de l'anàlisi</title>
</head>
<body>
    <h2>Resultats de l'anàlisi</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = trim($_POST["text"]);
        $paraula = trim($_POST["paraula"]);

        if (empty($text) || empty($paraula)) {
            echo "<p style='color: red;'> Error: Cal omplir tots els camps del formulari.</p>";
            echo "<a href='exercici02.html'>Torna enrere</a>";
        } else {
            $longitudText = strlen($text);
            $comptadorParaula = substr_count(strtolower($text), strtolower($paraula));

            echo "<p><strong>Longitud del text:</strong> $longitudText caràcters.</p>";
            echo "<p><strong>La paraula '$paraula' apareix:</strong> $comptadorParaula vegada/es.</p>";
        }
    } else {
        echo "<p>No s'han rebut dades.</p>";
    }
    ?>
</body>
</html>
