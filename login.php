<?php
require_once "layouts/head.php";
require_once "validation/check.php";
?>

<form method="post" action="database/login_user.php" class="centering width-form">
    <div class="form-group mb-0">
        <label for="exampleInputEmail1">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="d-flex">
        <div>
            <?php if(isset($_GET['info'])){
                if($_GET['info'] == "no_account"){
                    echo "<i class=\"fas fa-exclamation-circle ml-2 mr-2 mt-1 darkred\"></i>";
                }
            } ?>
        </div>
        <div class="darkred mb-2">
            <small> <?php if(isset($_GET['info'])){if($_GET['info'] == "no_account"){echo "This e-mail does not have an associated account";}} ?> </small>
        </div>
    </div>
    <div class="form-group mb-0">
        <label for="exampleInputPassword1">Password</label>
        <input name="pass" type="password" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="d-flex">
        <div>
            <?php if(isset($_GET['info'])){
                if($_GET['info'] == "wrong_pass"){
                    echo "<i class=\"fas fa-exclamation-circle ml-2 mr-2 mt-1 darkred\"></i>";
                }
            } ?>
        </div>
        <div class="darkred">
            <small> <?php if(isset($_GET['info'])){if($_GET['info'] == "wrong_pass"){echo "Incorrect password";}} ?> </small>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-info mt-3">Submit</button>
</form>

<?php
require_once "layouts/footer.php";
?>
