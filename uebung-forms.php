<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    require "error-check.php";
?>
<body>
    <p>
        <?php
            include "current-day.php";
        ?>
    </p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="<?php echo $name; ?>">
        <?php
            include "error-message.php";
            echo $nameErr;
        ?>
        <br>
        <label for="age">Alter: </label>
        <input type="number" name="age" id="age" min="18" max="100" value="<?php echo $age; ?>">
        <?php
            include "error-message.php";
            echo $ageErr;
        ?>
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>">
        <?php
            include "error-message.php";
            echo $emailErr;
        ?>
        <br>
        <label for="website">Webseite: </label>
        <input type="text" name="website" id="website"  value="<?php echo $website; ?>">
        <?php
            include "error-message.php";
            echo $websiteErr;
        ?>
        <br>
        <label for="comment">Kommentar: </label>
        <textarea name="comment" id="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br>
        <p>Geschlecht:</p>
        <input type="radio" name="gender" value="female" <?php if ($gender == "female") { echo "checked"; } ?>>Weiblein
        <input type="radio" name="gender" value="male" <?php if ($gender == "male") { echo "checked"; } ?>>Männlein
        <input type="submit">
    </form>
</body>
</html>