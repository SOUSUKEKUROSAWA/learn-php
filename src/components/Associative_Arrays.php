<form action="site.php" method="post">
    Student Name: <input type="text" name="student">
    <input type="submit">
</form>
<?php
    $grades = array("Jim"=>"A+", "Pam"=>"B-");
    echo "<br>";
    echo $grades['Jim'];
    // add
    $grades['Jim'] = "F";
    echo "<br>";
    echo $grades['Jim'];
    // input
    echo "<br>";
    echo $grades[$_POST["student"]];
?>