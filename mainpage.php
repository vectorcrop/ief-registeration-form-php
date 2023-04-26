<?php 
session_start();
include("path.php");
?>


  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Iefexpo</title>
  </head>
  <body style="background-color: black; color:white;">

    <center><br><br><br><br><br><br><br><br><br>
    <div class="container">
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

    <h1 class="mb-4">Hello, Welcome <?php echo $_SESSION['username']; ?>!</h1>
      <a href="redirect.php" class="btn btn-primary">Welcome to Iefexpo</a>
      <a href="logout.php" class="btn btn-dark">Register Again</a>

    </div>
    </center>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>