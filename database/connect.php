<?php
session_start();

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phone_contacts', "root", "password");

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>