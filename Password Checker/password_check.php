<?php
if($_POST[password]) {
$password = $_POST[password];


if (preg_match('/^[0-9]+[a-zA-Z]+[!_%&*#@()<>]+$/',$password)){
print("Your password setup is complete!");
echo "<br>";
print("You entered: $password");
}
else {
print("Your password has not followed the pattern. 1 or more numbers, then 1 or more letters, then 1 or more symbols [!_-%&*$@()<>] in that specific order");
echo "<br>";
print("you entered: $password");
}




} else {
?>
<html>
<body>

<form action="password_check.php" method="POST">
<h1>Enter a password that begins with 1 or more numbers, then 1 or more letters, then ends with 1 or more symbols [!_%&*#$@()<>] in that order</h1>
Enter Password: <input type="text" name="password">
<input type="submit">
</form>

</body>
</html>

<?php } ?>