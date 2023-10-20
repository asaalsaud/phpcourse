<form action = "form.php" method="GET">
name: <input type="text" name = "fname">
<br>
last: <input type ="text" name = "lname">
<br>
<form action = "form.php" method ="POST">
password: <input type ="password" name= "password">
</form>
age: <input type = "number" name= "age">
<input type = "submit">
</form>

<?php
echo $_GET["fname"];
echo $_GET["lname"];
echo $_POST["password"];
echo $_REQUEST["age"];
?>