<?php
require_once "layouts/head.php";
?>

<?php if(isset($_SESSION['ID'])) { ?>
    <div>
        <p>Welcome (back), <?= $_SESSION['firstname'].' '.$_SESSION['lastname'] ?> !</p>
    </div>
<?php } else { ?>
    <div>
        <p>Welcome, please log in on our platform!</p>
    </div>
<?php } ?>

<?php
require_once "layouts/footer.php";
?>

