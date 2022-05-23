<?php

include 'conn1.php';

$id = $_GET['id'];

$q = "DELETE FROM `crudtable1` WHERE id = $id ";

mysqli_query($con,$q);

header('location:display1.php');
?>