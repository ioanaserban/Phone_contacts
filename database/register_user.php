<?php
require_once 'connect.php';
var_dump($_POST);
if($_POST['password'] != $_POST['confirm_password']) {
    //...
    header('Location: /register.php?info=wrong_match');
}
$query = 'INSERT INTO users (email, phone_num, firstname, lastname, password)
VALUES ("' . $_POST['email'] . '"," ' . $_POST['phone_number'] . '", "' . $_POST['first_name'] . '", "' . $_POST['last_name'] . '", "' . md5($_POST['password']) . '"); ';
echo '<br>'.$query;

$dbh->query($query);

header('Location: /register.php?info=connected');
die();