<?php
    session_start();
    session_unset();
    session_destroy();

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $link_name = $_GET['link_name'];
    $link_age = $_GET['link_age'];
    
    if (!empty($name) && !empty($age) && !empty($email)) {
        echo "$name ist $age Jahre alt und hat die Email $email. <br>";
    } else if (!empty($link_name) && !empty($link_age)) {
        echo "$link_name ist $link_age Jahre alt.";
    };

    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $age = test_input($_POST["age"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);

    echo "Website: $website<br>";
    echo "Kommentar: $comment<br>";
    echo "Geschlecht: $gender<br>";
    }

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
    
?>