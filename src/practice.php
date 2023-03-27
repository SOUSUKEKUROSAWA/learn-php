<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php include "./components/Working_With_String.php" ?>
        <hr>
        <?php include "./components/Working_With_Numbers.php" ?>
        <hr>
        <?php include "./components/Getting_User_Input.php" ?>
        <hr>
        <?php include "./components/Arrays.php" ?>
        <hr>
        <?php include "./components/Using_Checkboxes.php" ?>
        <hr>
        <?php include "./components/Associative_Arrays.php" ?>
        <hr>
        <?php include "./components/Including_HTML.html" ?>
        <hr>
        <?php
            $title = "ABC";
            $author = "Mike";
            include "./components/Include_PHP.php";
            sayHi("So-san");
            echo "<br>";
            echo $feetInMile;
        ?>
        <hr>
        <?php include "./components/Classes_and_Objects.php" ?>
        <hr>
        <?php include "./components/Constructors.php" ?>
        <hr>
        <?php include "./components/Object_Functions.php" ?>
        <hr>
        <?php include "./components/Getters_and_Setters.php" ?>
        <hr>
        <?php include "./components/Inheritance.php" ?>
    </body>
</html>