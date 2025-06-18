<?php
    $nameErr = $ageErr = $emailErr = $websiteErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errors["name"])) {
        $nameErr = "<span>" . $errors["name"] . "</span>";
    };

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errors["age"])) {
        $ageErr = "<span>" . $errors["age"] . "</span>";
    };

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errors["email"])) {
        $emailErr = "<span>" . $errors["email"] . "</span>";
    };

    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errors["website"])) {
        $websiteErr = "<span>" . $errors["website"] . "</span>";
    };
?>