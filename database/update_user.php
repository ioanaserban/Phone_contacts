<?php

include "connect.php";


$query = 'update users set firstname="'.$_POST['firstname'].'", lastname="'.$_POST['lastname'].'", email="'.$_POST['email'].'", phone_num="'.$_POST['phone'].'" where ID='.$_SESSION['ID'];

$dbh->query($query);

var_dump($dbh->query($query));
die();

header("Location: /account.php");
die();

?>