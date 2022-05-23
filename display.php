<?php


include 'conn.php';
 
if(isset($_POST['done'])){

    $username= $_POST['username'];
    $password= $_POST['password'];
   
    $q = "SELECT * FROM crudtable ";

    $query = mysqli_query($con,$q);

}


?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      h2 a{
        text-align:center;
                font-size:2rem; 
                font-style:'Faustina', serif;
      }
      </style>
</head>
<body>
   
<div class="container">
<div class="col-lg-12">  
<br><br>
<h2><a href="index.php">Go Back</a></h2>
<h2><a href="display1.php">Go to Book Form details</a></h2>
<br>
<br>
<h1 class="text-primary text-center table-bordered bg-dark">Sign In Table Data</h1>
<table class="table table-stripped table-hover table-bordered">

<tr class="bg-dark text-white text-center">
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Delete</th>
<th>Update</th>
</tr>
<?php

include 'conn.php';

    $q = "SELECT * FROM `crudtable`";

    $query = mysqli_query($con,$q);

    while($res = mysqli_fetch_array($query)){

?>

<tr class="text-center">
<td><?php echo $res['id'];  ?></td>
<td><?php echo $res['username'];   ?></td>
<td><?php echo $res['password'];   ?></td>
<td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>"class="text-white">
Delete</a></button></td>
<td><button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">
Update</a></button></td>

</tr>
<?php
    }
?>

</table>
</div>
</div>
</body>
</html>