<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php include "./components/Working_With_String.php" ?>
        <?php include "./components/Working_With_Numbers.php" ?>
        <?php include "./components/Getting_User_Input.php" ?>
        <?php include "./components/Arrays.php" ?>
        <?php include "./components/Using_Checkboxes.php" ?>
        <?php include "./components/Associative_Arrays.php" ?>
        <?php include "./components/include.html" ?>
        <?php
            $title = "ABC";
            $author = "Mike";
            include "./components/Include_PHP.php";
            sayHi("So-san");
            echo "<br>";
            echo $feetInMile;
        ?>
    </body>
</html>