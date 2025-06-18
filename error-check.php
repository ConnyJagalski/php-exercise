<?php
    date_default_timezone_set("Europe/Berlin");

    session_start();

    $errors = [];
    $name = $age = $email = $website = $comment = $gender = "";

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = isset($_POST["name"]) ? test_input($_POST["name"]) : "";
        $age = isset($_POST["age"]) ? test_input($_POST["age"]) : "";
        $email = isset($_POST["email"]) ? test_input($_POST["email"]) : "";
        $website = isset($_POST["website"]) ? test_input($_POST["website"]) : "";
        $comment = isset($_POST["comment"]) ? test_input($_POST["comment"]) : "";
        $gender = isset($_POST["gender"]) ? test_input($_POST["gender"]) : "";

        if (empty($name)) {
            $errors["name"] = "Bitte geben Sie Ihren Namen ein.";
        } else if (!preg_match("/^[a-zA-Z-' ]+$/",$name)) {
            $errors["name"] = "Nur Buchstaben und Leerzeichen sind erlaubt!";
        };

        if (empty($age)) {
            $errors["age"] = "Bitte geben Sie Ihr Alter ein.";
        } else if (!preg_match("/^[0-9]+$/",$age)) {
            $errors["age"] = "Nur ganze Zahlen sind erlaubt!";
        };

        if (empty($email)) {
            $errors["email"] = "Bitte geben Sie Ihre Email ein.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Ungültige Email!";
        };

        if (!empty($website) && !preg_match("/\b(https?:\/\/)?(www\.)?[a-z0-9]+\.[a-z0-9]+([a-z0-9+&@#\/%?=~_|!:,.;]+)?/i", $website)) {
            $errors["website"] = "Ungültige Webseite!";
        }

        if (empty($errors)) {
            $formular_daten = [
                "name" => $name,
                "age" => $age,
                "email" => $email,
                "website" => $website,
                "comment" => $comment,
                "gender" => $gender
            ];
            $_SESSION["formular-daten"] = $formular_daten;
            header("Location: request.php");
            exit();
        }
    };
?>