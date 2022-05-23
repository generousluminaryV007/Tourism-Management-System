<?php


include 'conn1.php';
 
if(isset($_POST['done'])){

    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    $destination= $_POST['destination'];
    $guests= $_POST['guests'];
    $arrival= $_POST['arrival'];
    $departure= $_POST['departure'];

   
    $q = "SELECT * FROM crudtable1";

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
</head>
<body>
   
<div class="container">
<div class="col-lg-12">  
<br><br>
<h1 class="text-warning text-center">Display Table Data</h1>
<br>
<h1 class="text-primary text-center table-bordered bg-dark">Booking Form Table Data</h1>
<table class="table table-stripped table-hover table-bordered">

<tr class="bg-dark text-white text-center">
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Phone No</th>
<th>Address</th>
<th>Destination</th>
<th>Guests</th>
<th>Arrival</th>
<th>Departure</th>
<th>Delete</th>
<th>Update</th>
</tr>
<?php

include 'conn1.php';

    $q = "SELECT * FROM `crudtable1`";

    $query = mysqli_query($con,$q);

    while($res = mysqli_fetch_array($query)){

?>

<tr class="text-center">
<td><?php echo $res['id']; ?></td>
<td><?php echo $res['name']; ?></td>
<td><?php echo $res['email']; ?></td>
<td><?php echo $res['phone']; ?></td>
<td><?php echo $res['address']; ?></td>
<td><?php echo $res['destination']; ?></td>
<td><?php echo $res['guests']; ?></td>
<td><?php echo $res['arrival']; ?></td>
<td><?php echo $res['departure']; ?></td>
<td><button class="btn-danger btn"> <a href="delete1.php?id=<?php echo $res['id']; ?>"class="text-white">
Delete</a></button></td>
<td><button class="btn-primary btn"> <a href="update1.php?id=<?php echo $res['id']; ?>" class="text-white">
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