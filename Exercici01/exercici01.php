<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades Rebudes</title>
</head>
<body>
    <h2>Dades rebudes del formulari</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST["nom"]);
        $cognoms = htmlspecialchars($_POST["cognoms"]);
        $genere = htmlspecialchars($_POST["genere"]);
        $email = htmlspecialchars($_POST["email"]);
        $edat = htmlspecialchars($_POST["edat"]);
        $ciutat = htmlspecialchars($_POST["ciutat"]);
        $motivacions = htmlspecialchars($_POST["motivacions"]);

        // Comprovem si s'han seleccionat aficions
        if (!empty($_POST["aficions"])) {
            $aficions = implode(", ", $_POST["aficions"]);
        } else {
            $aficions = "Cap afició seleccionada";
        }

        // Agrupem totes les dades en una variable
        $dadesUsuari = "
            <strong>Nom:</strong> $nom<br>
            <strong>Cognoms:</strong> $cognoms<br>
            <strong>Gènere:</strong> $genere<br>
            <strong>Correu electrònic:</strong> $email<br>
            <strong>Edat:</strong> $edat<br>
            <strong>Ciutat:</strong> $ciutat<br>
            <strong>Aficions:</strong> $aficions<br>
            <strong>Motivacions personals:</strong> $motivacions
        ";

        echo $dadesUsuari;
    } else {
        echo "<p>No s'han rebut dades.</p>";
    }
    ?>
</body>
</html>
