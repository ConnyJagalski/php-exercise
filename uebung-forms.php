<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $errors = [];
    $name = $age = $email = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"] ?? "";
        $age = $_POST["age"] ?? "";
        $email = $_POST["email"] ?? "";

        if (empty($name)) {
            $errors["name"] = "Bitte geben Sie Ihren Namen ein.";
        };

        if (empty($age)) {
            $errors["age"] = "Bitte geben Sie Ihr Alter ein.";
        };

        if (empty($email)) {
            $errors["email"] = "Bitte geben Sie Ihre Email ein.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = 'Bitte geben Sie eine gültige E-Mail-Adresse ein.';
        };

        if (empty($errors)) {
            $_SESSION["formular-daten"] = $formular_daten;
            header("Location: request.php");
            exit();
        }
    };
?>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required>
        <?php
            if (isset($errors["name"])) {
                echo "<p></p>";
            }
        ?>
        <br>
        <label for="age">Alter: </label>
        <input type="number" name="age" id="age" required>
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="website">Webseite: </label>
        <input type="text" name="website" id="website">
        <br>
        <label for="comment">Email: </label>
        <textarea name="comment" id="comment" rows="5" cols="40"></textarea>
        <br>
        <p>Geschlecht:</p>
        <input type="radio" name="gender" value="female" checked>Weiblein
        <input type="radio" name="gender" value="male">Männlein
        <input type="submit">
    </form>

    <a href="request.php?link_name=John&link_age=21">Test-Link</a>

</body>
</html>