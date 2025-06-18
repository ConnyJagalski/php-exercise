<?php

    $wochentag = "";
    $datum = date("d.m.Y");
    $zeit = date("H:i");

    switch (date("l")) {
        case "Monday":
            $wochentag = "Montag";
            break;
        case "Tuesday":
            $wochentag = "Dienstag";
            break;
        case "Wednesday":
            $wochentag = "Mittwoch";
            break;
        case "Thursday":
            $wochentag = "Donnerstag";
            break;
        case "Friday":
            $wochentag = "Freitag";
            break;
        case "Saturday":
            $wochentag = "Samstag";
            break;
        case "Sunday":
            $wochentag = "Sonntag";
            break;
    }

    echo    "Heute ist $wochentag, der $datum <br>
            Es ist $zeit Uhr."
?>