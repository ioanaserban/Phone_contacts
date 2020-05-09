<?php
require_once 'connect.php';

$query = 'select * from phone_contacts.users where email="'.$_POST['email'].'";';

$data = $dbh->query($query)->fetchAll(PDO::FETCH_ASSOC);

if (!count($data)) {
    header('Location: /login.php?info=no_account');
    die();
}

if (md5($_POST['pass']) == $data[0]['password']) {
    // adauga chestii in sesiune
    foreach ($data[0] as $key => $element){
        $_SESSION[$key] = $element;
    }
    header('Location: /index.php');
    die();

} else {
    header('Location: /login.php?info=wrong_pass');
    die();
}
?>