<form action="site.php" method="post">
    <input type="checkbox" name="fruits[]" value="apples">Apples<br>
    <input type="checkbox" name="fruits[]" value="oranges">Oranges<br>
    <input type="checkbox" name="fruits[]" value="pears">Pears<br>
    <input type="submit">
</form>
<?php
    $fruits = $_POST["fruits"];
    echo $fruits[1];
?>