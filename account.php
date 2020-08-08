<?php
require_once "layouts/head.php";
?>


<?php if(isset($_SESSION['ID'])) { ?>
<form action="database/update_user.php" method="post">
<div class="d-flex margin-t">
    <div class=" border shadow-sm p-3 bg-white rounded account-look setp-in-front">
        <p class=" mt-3 border-circle center-fit font "> <?= $_SESSION['firstname'][0].''.$_SESSION['lastname'][0] ?> </p>
        <div class=" mt-5 ml-4">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <i class="mr-2 mt-1 fas fa-user"></i>
                    <p>Firstname</p>
                </div>
                <i class="cursor-pointer mt-1 navbar-color fas fa-chevron-right" onclick="showSettings('firstname')"></i>
            </div>
            <div class="d-flex justify-content-between">
               <div class="d-flex">
                   <i class="mr-2 mt-1 fas fa-user"></i>
                   <p>Lastname</p>
               </div>
                <i class="cursor-pointer mt-1 navbar-color fas fa-chevron-right" onclick="showSettings('lastname')"></i>
            </div>
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <i class="mr-2 mt-1 fas fa-at"></i>
                    <p>E-mail</p>
                </div>
                <i class="cursor-pointer mt-1 navbar-color fas fa-chevron-right" onclick="showSettings('email')"></i>
            </div>
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <i class="mr-2 mt-1 fas fa-phone"></i>
                    <p>Phone</p>
                </div>
                <i class="cursor-pointer mt-1 navbar-color fas fa-chevron-right" onclick="showSettings('phone')"></i>
            </div>
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <i class="mr-2 mt-1 fas fa-cog"></i>
                    <p>Account</p>
                </div>
                <i class="cursor-pointer mt-1 navbar-color fas fa-chevron-right" onclick="showButton('account')"></i>
            </div>
        </div>
        <div class="center-fit">
            <button class="btn btn-outline-info">Save changes</button>
        </div>

    </div>
    <div id="inputsDiv" class="w-50 margin-left-acc" >
        <div class="height setting-m-t ">
            <input id='firstname' type="text" class="form-control d-none input-height shadow-sm animate-left " name="firstname" placeholder="Edit firstname" value="<?= $_SESSION['firstname'] ?>">
        </div>
        <div class="height">
            <input id='lastname' type="text" class="form-control d-none input-height shadow-sm animate-left" name="lastname" placeholder="Edit lastname" value="<?= $_SESSION['lastname'] ?>">
        </div>
        <div class="height ">
            <input id='email' type="text" class="form-control d-none input-height shadow-sm animate-left" name="email" placeholder="Edit e-mail" value="<?= $_SESSION['email'] ?>">
        </div>
        <div class="height ">
            <input id='phone' type="text" class="form-control d-none input-height shadow-sm animate-left" name="phone" placeholder="Edit phone number" value="<?= $_SESSION['phone_num'] ?>">
        </div>
        <div class="height center-fit">
            <button id='account' type="button" class="btn btn-outline-danger d-none input-height shadow-sm fade-in">Delete account</button>
        </div>
    </div>
</div>
</form>


<?php } ?>

<?php
require_once "layouts/footer.php";
?>