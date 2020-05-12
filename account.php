<?php
require_once "layouts/head.php";
?>


<?php if(isset($_SESSION['ID'])) { ?>

    <div class=" border shadow-sm p-3 mb-5 bg-white rounded account-look">
        <p class=" mt-3 border-circle center-fit font "> <?= $_SESSION['firstname'][0].''.$_SESSION['lastname'][0] ?> </p>
        <div class=" mt-5 ml-4">
            <div class="d-flex">
                <i class="mr-2 mt-1 fas fa-user"></i>
                <p>Name</p>
            </div>
            <div class="d-flex">
                <i class="mr-2 mt-1 fas fa-at"></i>
                <p>E-mail</p>
            </div>
            <div class="d-flex">
                <i class="mr-2 mt-1 fas fa-phone"></i>
                <p>Phone</p>
            </div>
            <div class="d-flex">
                <i class="mr-2 mt-1 fas fa-key"></i>
                <p>Password</p>
            </div>
            <div class="d-flex">
                <i class="mr-2 mt-1 fas fa-cog"></i>
                <p>Account</p>
            </div>
        </div>
        <div class="center-fit">
            <button class="btn btn-outline-info">Save changes</button>
        </div>

    </div>

<?php } ?>

<?php
require_once "layouts/footer.php";
?>