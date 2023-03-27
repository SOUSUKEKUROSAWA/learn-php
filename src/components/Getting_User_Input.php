<form action="/" method="get">
    Name: <input type="text" name="username">
    <input type="submit">
</form>
Your name is 
<?php
    echo $_GET["username"];
?>