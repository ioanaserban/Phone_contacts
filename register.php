<?php
require_once "layouts/head.php";
?>

    <form method="post" action="database/register_user.php" class="centering register-form">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="FirstName">First Name</label>
            <input name="first_name" type="text" class="form-control" id="FirstName" required>
        </div>
        <div class="form-group">
            <label for="SecondName">Last Name</label>
            <input name="last_name" type="text" class="form-control" id="SecondName" required>
        </div>
        <div class="form-group">
            <label for="PhoneNumber">Phone Number</label>
            <input name="phone_number" type="text" class="form-control" id="PhoneNumber" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control <?php if(isset($_GET['info'])){if($_GET['info']){echo "border-red";}} ?>" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <div class=" d-flex ">
                <input name="confirm_password" type="password" class="form-control <?php if(isset($_GET['info'])){if($_GET['info']){echo "border-red";}} ?>" id="exampleInputPassword2" required>
                <div class=" tooltip "> <?php if(isset($_GET['info'])){if($_GET['info']){echo "<i class=\"fas fa-exclamation-circle ml-2 darkred mt-2\"></i> <span class=\"tooltiptext\">Tooltip text</span>";}}  ?> </div>
            </div>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-outline-info">Submit</button>
    </form>

<?php
    if(isset($_GET['info'])) {
        if($_GET['info'] == "connected") {
            echo " <div class='text-align mt-3 darkgreen'> <p> Contul dumneavoastra a fost creat cu succes! </p> </div> " ;
        }
    }
?>

<?php
require_once "layouts/footer.php";
?>