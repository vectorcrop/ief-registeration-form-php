<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ief | register now</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/iofrm-theme29.css">
</head>
<style>
    .stuck {
        width: 100%;
        margin-top: 80px;
        margin-bottom: 50px;
        position: absolute;
        text-align: center;
        margin-right: 18px;
        z-index: 2;
        float: left;
    }
    .form-body.without-side .form-content input, .form-body.without-side .form-content .dropdown-toggle.btn-default {
    border: 1px solid rgba(0, 149, 255, 0);
    background-color: rgba(255, 255, 255, 0.07);
    color: #fff;
}
</style>

<body>
    <div class="form-body without-side">
        <div class="stuck">
            <img style="width: 80px; margin-right: 10px;" src="assets/images/ieflogo.png" alt="">
            <img style="width: 80px;" src="assets/images/Dejaavu logo.png" alt="">
            <img style="width: 80px; margin-left: 10px;" src="assets/images/KAAF NEW LOGO - SELECTED.png" alt="">
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="assets/images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h4 style="color: white; font-weight: bold;">INTERNATIONAL EDUCATIONAL FESTIVAL</h4>
                        <p>IEF - 12th MAY - MALAPPURAM - ROSE LOUNGE</p>
                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?><br>

                        <div>
                            <form action="login.php" method="post">


                            <input class="form-control" type="text"  value="<?php echo $username; ?>" name="username" placeholder="Username" required>
                            
                            <input class="form-control"  type="password"  value="<?php echo $password; ?>" name="password" placeholder="Admin Code" required>



                            <div class="form-button">
                                <button id="submit" type="submit"  name="login-btn" class="ibtn">Register</button>


                                <img src="assets/images/full white logo.png" style="width: 100px;">
                            </div>


                        </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>