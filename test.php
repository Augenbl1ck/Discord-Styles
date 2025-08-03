<?php

    $message = 'Dump and die example';

    echo '<pre>';
    var_dump($message);
    var_dump("Test {$message}"); //So gehts auch mit Variablen in Strings
    echo '</pre>';
    //die(); beendet sofort die Ausführung des **gesamten** Skripts
    ?>
    <?php
    echo 'After calling the die function';

    $test = 1_000_000; //PHP 7.4+ erlaubt die Verwendung von Unterstrichen in Zahlen für bessere Lesbarkeit

    echo is_int($test); // Überprüft, ob $test ein Integer ist
    echo is_float(0.5); // Überprüft, ob 0.5 ein Float ist
    echo is_null(null); // Überprüft, ob null ein Nullwert ist

    $title = 'PHP string is awesome';
    echo $title[0]; //Für Char in Strings
    echo strlen($title); //Länge des Strings

    $he = 'Bob';
    $she = 'Alice';

    $text = "$he said, \"PHP is awesome\".
    \"Of course.\" $she agreed.";

    unset($title); //Entfernt die Variable $title
    
    $title = 'My site';

    //Identifier für den Beginn des Heredoc
    $header = <<<HEADER
    <header>
        <h1>$title</h1>
    </header>
    HEADER;

    echo $header;

    // 42 == "42" ergibt true (Wert gleich, Typ egal)
    // 42 === "42" ergibt false (Wert gleich, aber Typ unterschiedlich: int vs. string)
    ?>
