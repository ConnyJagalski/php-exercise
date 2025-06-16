<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello, World!"; // Jede Zeile in PHP endet mit einem Semikolon.

    $color = "red"; // Dies ist eine Variable. Variablennamen sind nutzen Unterstriche und beginnen mit einem Dollarzeichen ($).

    echo "My car is " . $color . "."; // mit echo stellt man etwas auf dem Bildschirm dar.
    echo "My car is $color."; // Variablen können auch direkt in Strings verwendet werden, wenn sie in Anführungszeichen stehen.

    /* So kommentiert man in php in mehreren Zeilen. Diese Syntax dient ebenfalls dazu, kommentare mitten im code zu platzieren. */

    var_dump($color); // var_dump gibt den Datentyp und den Wert einer Variable aus.

    $farbe = $meinAuto = $lieblingsfarbe = "violett"; // Mehrere Variablen können in einer Zeile deklariert werden.

    function test() {
        global $farbe; // Mit dem Schlüsselwort "global" kann man auf globale Variablen innerhalb einer Funktion zugreifen.
        // Variablen sind ohne das Schlüsselwort nur auf jeweils der gleichen Ebene nutzbar.
        // mit global muss die Variable quasi erst "gerufen" werden, damit sie in der Funktion genutzt werden kann.
        $GLOBALS['farbe']; // andere Schreibweise => direkter Zugriff auf die globale Variable
    }

    function myTest() {
    static $x = 0; // Mit dem Schlüsselwort "static" bleibt der Wert der Variable zwischen Funktionsaufrufen erhalten.
    echo $x;
    $x++;
    }

    $ein_satz = "Das ist ein Satz.";

    strlen($ein_satz); // strlen gibt die Länge eines Strings zurück.
    strpos($ein_satz, "e"); // strpos gibt die Position des ersten Vorkommens eines Zeichens in einem String zurück. Geht auch mit einem ganzen Wort.
    str_word_count($ein_satz); // str_word_count zählt die Anzahl der Wörter in einem String.
    strtoupper($ein_satz); // strtoupper wandelt einen String in Großbuchstaben um.
    strtolower($ein_satz); // strtolower wandelt einen String in Kleinbuchstaben um.
    str_replace("Satz", "Text", $ein_satz); // str_replace ersetzt ein Wort in einem String durch ein anderes Wort.
    strrev($ein_satz); // strrev kehrt die Reihenfolge der Zeichen in einem String um.
    trim($ein_satz); // trim entfernt Leerzeichen am Anfang und Ende eines Strings.
    explode(" ", $ein_satz); // explode teilt einen String in ein Array, basierend auf einem Trennzeichen (hier: Leerzeichen).
    print_r(explode(" ", $ein_satz)); // print_r gibt den Inhalt eines Arrays lesbar aus.

    $hallo = "Hallo";
    $welt = "Welt";
    $halloWelt = $hallo . " " . $welt; // String-Konkatenation mit dem Punkt (.) verbindet zwei Strings.
    $halloWelt = "$hallo $welt"; // Alternativ: String-Interpolation, wo Variablen direkt in Anführungszeichen verwendet werden können.

    substr($halloWelt, 0, 5); // substr gibt einen Teilstring zurück, hier die ersten 5 Zeichen von $halloWelt.

    $unerlaubte_zeichen = "We are the so-called \"Vikings\" from the north."; // Backslashes (\) werden verwendet, um z.B. Anführungszeichen innerhalb von Strings zu erlauben.

    is_int(5); // is_int prüft, ob eine Variable ein Integer ist.
    is_float(5.5); // is_float prüft, ob eine Variable ein Float ist.
    is_string("Hello"); // is_string prüft, ob eine Variable ein String ist.
    is_array(array(1, 2, 3)); // is_array prüft, ob eine Variable ein Array ist.
    is_bool(true); // is_bool prüft, ob eine Variable ein Boolean ist.
    is_null(null); // is_null prüft, ob eine Variable null ist.
    is_object(new stdClass()); // is_object prüft, ob eine Variable ein Objekt ist.
    is_nan($halloWelt); // is_nan prüft, ob eine Variable NaN (Not a Number) ist.
    is_numeric("123"); // is_numeric prüft, ob eine Variable numerisch ist (kann Integer oder Float sein). Gibt auch true zurück für Strings, die Zahlen enthalten.

    $string_to_int = "123";
    $string_to_int = (int)$string_to_int; // Typumwandlung von String zu Integer.

    rand(1, 10); // rand gibt eine Zufallszahl zwischen 1 und 10 zurück.

    define("NAME_DER_KONSTANTEN", "Wert der Konstanten"); // Mit define() werden nicht veränderbare, global verfügbare Variablen (Konstanten) erstellt.
    echo NAME_DER_KONSTANTEN; // Konstanten werden ohne das Dollarzeichen ($) verwendet. Müssen nicht groß geschrieben werden, aber es ist eine Konvention, sie in Großbuchstaben zu schreiben.

    define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
    ]);
    echo cars[0]; // Konstanten können auch Arrays sein. Hier wird das erste Element des Arrays ausgegeben.

    $exists = $gibt_es_nicht ?? $hallo; // Der Null-Koaleszenz-Operator (??) gibt den Wert der linken Seite zurück, wenn er existiert und nicht null ist, andernfalls den Wert der rechten Seite. Hier wird $hallo verwendet, wenn $gibt_es_nicht nicht existiert.
    $exists = $gibt_es_nicht ?: $hallo; // Der Ternäre Operator (?:) gibt den Wert der linken Seite zurück, wenn er wahr ist, andernfalls den Wert der rechten Seite. Hier wird $hallo verwendet, wenn $gibt_es_nicht nicht wahr ist.

    date("H:i:s"); // Gibt die aktuelle Uhrzeit im Format Stunden:Minuten:Sekunden zurück.

    if ($a < 10) $b = "Hello"; // Einfache if-Anweisung => alternative Schreibweise.
    $b = $a < 10 ? "Hello" : "Good Bye"; // Einfache Schreibweise für if-else.

    $d = 3;

    switch ($d) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:  
            echo "The weeks feels so long!";
            break;
        case 6:
        case 0:
            echo "Weekends are the best!";
            break;
        default:
            echo "Something went wrong";
    } // mehrere Fälle haben die gleiche Ausgabe.

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as &$x) {
        if ($x == "blue") $x = "pink";
    } // das &-Zeichen vor $x macht es zu einer Referenz, sodass Änderungen an $x auch das Original-Array $colors beeinflussen.

    count($colors); // count gibt die Anzahl der Elemente in einem Array zurück.
    $colors[] = "purple"; // Ein neues Element wird am Ende des Arrays hinzugefügt.
    array_push($colors, "orange", "pink"); // array_push fügt ein oder mehrere Elemente am Ende eines Arrays hinzu.
    array_pop($colors); // array_pop entfernt das letzte Element eines Arrays.
    array_shift($colors); // array_shift entfernt das erste Element eines Arrays.
    array_unshift($colors, "orange"); // array_unshift fügt ein Element am Anfang eines Arrays hinzu.
    array_splice($colors, 1, 1); // array_splice entfernt ein Element an einer bestimmten Position (hier: 1) und kann auch mehrere Elemente entfernen. Der zweite Parameter gibt die Anzahl der zu entfernenden Elemente an.
    unset($colors[2]); // unset entfernt ein Element aus einem Array, hier das Element an der Position 2.

    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964); // Assoziatives Array mit Schlüssel-Wert-Paaren.
    echo $car["model"]; // Zugriff auf ein Element eines assoziativen Arrays.
    $car["color"] = "red"; // Hinzufügen eines neuen Elements zu einem assoziativen Array.
    unset($car["year"]); // Entfernen eines Elements aus einem assoziativen Array.

    function myFunction() {
        echo "I come from a function!";
    }
    $myArr = array("Volvo", 15, myFunction);
    $myArr[2](); // Aufruf der Funktion, die im Array gespeichert ist. Wichtig sind die Klammern () am Ende, um die Funktion auszuführen.

    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as &$x) {
        $x = "Ford";
    }
    unset($x); // wenn unset nicht gesetzt wird und der Name der in der Schleife verwendeten Variable wiederverwendet wird, wird der letzte Eintrag des Arrays überschrieben. unset entfernt die Referenz, sodass $x nicht mehr auf das letzte Element des Arrays verweist.

    $car["color"] = "red"; // Hinzufügen eines neuen Elements zu einem assoziativen Array.
    $car += ["kilometerstand" => 100000, "price" => 20000]; // Mit dem Plus-Zeichen können mehrere Datensätze zu einem Array hinzugefügt werden.
    ?>
</body>
</html>