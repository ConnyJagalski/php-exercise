<?php
    session_start();

    $form_data = null;
    $output = ""; // Variable für die Ausgabe initialisieren

    if (isset($_SESSION["formular-daten"])) {
        $form_data = $_SESSION["formular-daten"];
        // Session-Daten löschen, nachdem sie abgerufen wurden,
        // damit sie bei einem erneuten Aufruf der Seite (z.B. Refresh) nicht wieder angezeigt werden.
        unset($_SESSION["formular-daten"]);

        // Daten sicher ausgeben
        $name = htmlspecialchars($form_data['name']);
        $age = htmlspecialchars($form_data['age']);
        $email = htmlspecialchars($form_data['email']);
        $website = htmlspecialchars($form_data['website']);
        $comment = htmlspecialchars($form_data['comment']);
        $gender = htmlspecialchars($form_data['gender']);

        $output .= "<h1>Übermittelte Formulardaten:</h1>";
        $output .= "Name: $name <br>";
        $output .= "Alter: $age <br>";
        $output .= "Email: $email <br>";
        if (!empty($website)) {
            $output .= "Webseite: $website <br>";
        }
        if (!empty($comment)) {
            $output .= "Kommentar: $comment <br>";
        }
        $output .= "Geschlecht: $gender <br>";

    } else {
        // Keine Daten in der Session gefunden, leite zum Formular zurück oder zeige eine Meldung.
        header("Location: uebung-forms.php");
        exit(); // Wichtig, um die weitere Skriptausführung zu beenden.
    }
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulardaten Empfangen</title>
</head>
<body>
    <?php echo $output; ?>
    <p><a href="uebung-forms.php">Zurück zum Formular</a></p>
</body>
</html>