<?php
require_once "layouts/head.php";
?>

<?php if(isset($_SESSION['ID'])) { ?>
    <div>
<!--        <p>Welcome (back), --><?//= $_SESSION['firstname'].' '.$_SESSION['lastname'] ?><!-- !</p>-->
        <div class="container mt-5 " >
            <div class="row center-grid">
                <div class="col-sm">
                    <div onclick="redirectTo('/account.php')" class="cursor-pointer border padding shadow-sm p-3 mb-5 bg-white rounded">
                        <i class="fas fa-cogs setting footer-col"></i>
                        <p class="mt-3">Personalize your account</p>
                    </div>
                </div>
                <div class="col-sm ">
                    <div onclick="redirectTo('/agenda.php')" class="cursor-pointer border padding shadow-sm p-3 mb-5 bg-white rounded">
                        <i class="fas fa-address-book setting footer-col"></i>
                        <p class="mt-3">Personalize your agenda</p>
                    </div>
                </div>
                <div class="col-sm">
                    <div onclick="redirectTo('/add_new.php')" class=" cursor-pointer border padding shadow-sm p-3 mb-5 bg-white rounded">
                        <i class="fas fa-user-plus setting footer-col"></i>
                        <p class="mt-3">Add new contact</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div>
        <p>Welcome, please log in on our platform!</p>
    </div>
<?php } ?>

<?php
require_once "layouts/footer.php";
?>

