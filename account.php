<?php
require_once "layouts/head.php";
?>


<?php if(isset($_SESSION['ID'])) { ?>
<div class="d-flex margin-t">
    <div class=" border shadow-sm p-3 bg-white rounded account-look">
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
                <i class="cursor-pointer mt-1 navbar-color fas fa-chevron-right" onclick="showSettings('eMail')"></i>
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
                <i class="cursor-pointer mt-1 navbar-color fas fa-chevron-right" onclick="showSettings('account')"></i>
            </div>
        </div>
        <div class="center-fit">
            <button class="btn btn-outline-info">Save changes</button>
        </div>

    </div>
    <div id="inputsDiv" class=" w-50" >
        <div class="height setting-m-t">
            <input id='firstname' type="text" class="form-control d-none" name="firstname" placeholder="Edit firstname" value="<?= $_SESSION['firstname'] ?>">
        </div>
        <div class="height">
            <input id='lastname' type="text" class="form-control d-none" name="lastname" placeholder="Edit lastname" value="<?= $_SESSION['lastname'] ?>">
        </div>
        <div class="height ">
            <input id='eMail' type="text" class="form-control d-none" name="email" placeholder="Edit e-mail" value="<?= $_SESSION['email'] ?>">
        </div>
        <div class="height ">
            <input id='phone' type="text" class="form-control d-none" name="phone" placeholder="Edit phone number" value="<?= $_SESSION['phone_num'] ?>">
        </div>
        <div class="height ">
            <input id='account' type="text" class="form-control d-none" name="pass" placeholder="Edit account" value="123">
        </div>
    </div>
</div>

    <script>
        var number = {
            'firstname' : 0,
            'lastname' : 0,
            'eMail' : 0,
            'phone' : 0,
            'account' : 0

        };
            function showSettings(inputName) {

                if(number[inputName] == 0){

                    document.getElementById(inputName).classList.remove("d-none") ;

                    number[inputName] ++;
                }

                else {
                    number[inputName] = 0;
                    document.getElementById(inputName).classList.add("d-none");
                }

            }

    </script>

<?php } ?>

<?php
require_once "layouts/footer.php";
?>