<?php
    // echo
    $greeting = "Hello";
    echo "<h1>$greeting World!</h1>";
    echo "<p>$greeting</p>";
    // strlower
    $greeting = "CHAO";
    $greeting = strtolower($greeting);
    echo "<p>$greeting</p>";
    // index, strlen
    $greeting = "Chao";
    echo $greeting[strlen($greeting)-1];
    $greeting[0] = "P";
    echo "<p>$greeting</p>";
    // str_replace
    $greeting = "Hello World";
    $greeting = str_replace("Hello", "Chao", $greeting);
    echo "<p>$greeting</p>";
    // substr
    $greeting = "Hello World";
    $greeting = substr($greeting, 6, 3);
    echo "<p>$greeting</p>";
?>