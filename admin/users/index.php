<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <title>IefExpo</title>
  </head>
  <body>

   








    <br>
    <div class="container">
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

  <!-- Admin Content -->
                <div class="button-group">
                    <!-- <a href="create.php" class="btn btn-primary">Add User</a> -->
                    <a href="../dashboard.php" class="btn btn-primary w-25">Back</a> <a href="index.php" class="btn btn-warning w-25">Refresh</a>
                    <a class="btn btn-secondary" href="print.php">Print</a>

                    
                    <br><br>
                    <a href="#" class="btn btn-info">Total Registered Users : <?php 

include_once(ROOT_PATH . "/app/database/connect.php");

$query = "SELECT id FROM users ORDER BY id";
$query_run = mysqli_query($conn, $query);
$row = mysqli_num_rows($query_run);

echo '<h5> '.$row.'</h5>';
?></a>

                    <br><br><br>
                </div>
                <div class="content">
                    <h2 class="page-title">Manage Students</h2>


                    <table id="datatableid" class="table" style="width:100%">
        <thead class="thead-dark">
            <tr>
            <th>SN</th>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Place</th>
            <th>District</th>
            <th>College/School</th>
            <th>Course</th>
            <!-- <th>Edit</th> -->
            <th>Delete</th>

            </tr>
        </thead>
        <tbody>
        <?php foreach ($admin_users as $key => $user): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $user['id']; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['phone']; ?></td>
                                    <td><?php echo $user['place']; ?></td>
                                    <td><?php echo $user['dis']; ?></td>
                                    <td><?php echo $user['school']; ?></td>
                                    <td><?php echo $user['course']; ?></td>

                                    <!-- <td><a class="btn btn-primary" href="edit.php?id=<!?php echo $user['id']; ?>" class="edit">edit</a></td> -->
                                    <td><a class="btn btn-danger" href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">delete</a></td>
                                </tr>
                            <?php endforeach; ?>
           
            </tbody>
       
    </table>



                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                   
                </div>
     

    </div>
    <br><br><br>    <br><br><br>




    





     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
    $('#datatableid').DataTable();
} );
    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>
    