<?php
    // index
    $person = array("Kevin", 20, true, 65.4);
    echo $person;
    echo "<br>";
    echo $person[2];
    // reassignment
    $person[0] = 499;
    echo "<br>";
    echo $person[0];
    // add
    $person[10] = "Oscar";
    echo "<br>";
    echo $person[10];
    echo "<br>";
    echo $person[9];
    // count
    echo count($person);
?>