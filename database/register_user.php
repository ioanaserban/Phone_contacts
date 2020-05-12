<?php
require_once 'connect.php';

if($_POST['password'] != $_POST['confirm_password']) {
    //...
    header('Location: /register.php?info=wrong_match');
    die();
}
$query = 'INSERT INTO users (email, phone_num, firstname, lastname, password)
VALUES ("' . $_POST['email'] . '"," ' . $_POST['phone_number'] . '", "' . $_POST['first_name'] . '", "' . $_POST['last_name'] . '", "' . md5($_POST['password']) . '"); ';


$dbh->query($query);
echo $query;

header('Location: /register.php?info=connected');
die();
?>