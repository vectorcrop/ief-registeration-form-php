<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
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

    <h1 class="mb-4">Hello, Welcome Ief Admin Panel!</h1>
      <a href="users/index.php" class="btn btn-primary">Registered Users</a>
      <a href="../logout.php" class="btn btn-danger">Logout</a>


<br><br><br><br>

<a href="users/index.php" class="btn btn-warning">Total Registered Users : <?php 

include_once(ROOT_PATH . "/app/database/connect.php");

$query = "SELECT id FROM users ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);

echo '<h5> '.$row.'</h5>';
?></a>





    </div>
    </center>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>