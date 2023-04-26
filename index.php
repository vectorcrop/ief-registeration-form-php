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
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-all.min.css"> -->
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
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #a5a9ac;
    background-color: #1f2f3a;
    background-clip: padding-box;
    border: 1px solid #ced4da00;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-body.without-side .form-content input:hover, .form-body.without-side .form-content input:focus, .form-body.without-side .form-content .dropdown-toggle.btn-default:hover, .form-body.without-side .form-content .dropdown-toggle.btn-default:focus {
    border: 1px solid rgba(0, 149, 255, 0);
    background-color: rgba(255, 255, 255, 0.07);
    color: #fff;
}
</style>

<body>
    <div class="form-body without-side">
        <div class="stuck mb-3">
            <img style="width: 29%;" src="assets/images/clogo.jpg" alt="">
            <br>
            <!-- <img style="width: 80px;" src="assets/images/Dejaavu logo.png" alt="">
            <img style="width: 80px; margin-left: 10px;" src="assets/images/KAAF NEW LOGO - SELECTED.png" alt=""> -->
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <!-- <img src="assets/images/graphic3.svg" alt=""> -->
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h4 style="color: white; font-weight: bold;">INTERNATIONAL EDUCATIONAL FESTIVAL</h4>
                        <p>IEF - 12th MAY - MALAPPURAM - ROSE LOUNGE</p>
                        <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?><br>

                        <div>
                            <form action="index.php" method="post">


                            <input class="form-control" type="text"  value="<?php echo $username; ?>" name="username" placeholder="Full Name" required>

                            <input class="form-control"  type="email"  value="<?php echo $email; ?>" name="email"
                            placeholder="E-mail Address" required>

                            <input class="form-control"  type="phone"  value="<?php echo $phone; ?>" name="phone" placeholder="Phone" required>

                            <input class="form-control"  type="text"  value="<?php echo $course; ?>" name="course" placeholder="+2 Course" required>                 

                            <input class="form-control"  type="text"  value="<?php echo $school; ?>" name="school" placeholder="Preferred Course" required>

                            <select class="form-control mb-3" name="dis" id="dis" required>
                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                <option value="Kollam">Kollam</option>
                                <option value="mercedes">Pathanamthitta</option>
                                <option value="Alappuzha">Alappuzha</option>
                                <option value="Kottayam">Kottayam</option>
                                <option value="Idukki">Idukki</option>
                                <option value="Ernakulam">Ernakulam</option>
                                <option value="Thrissur">Thrissur</option>
                                <option value="Palakkad">Palakkad</option>
                                <option value="Malappuram">Malappuram</option>
                                <option value="Kozhikode">Kozhikode</option>
                                <option value="Wayanad">Wayanad</option>
                                <option value="Kannur">Kannur</option>
                                <option value="Kasaragod">Kasaragod</option>

                            </select>

                            <input class="form-control"  type="text"  value="<?php echo $place; ?>" name="place" placeholder="Place" required>
                            
                            



                            <div class="form-button">
                                <button id="submit" type="submit"  name="register-btn" class="ibtn">Register</button>


                               <a href="login.php"> <img src="assets/images/full white logo.png" style="width: 100px;"></a>
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