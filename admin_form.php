<?php

$connection = mysqli_connect('localhost:3307','root','','book_db');
if(isset($_POST['send'])){
    
   $name = $_POST['name'];
   $password = $_POST['password'];

   $query = 'SELECT * FROM `admin_form` WHERE `Admin_Name` =$_POST[name] AND `Admin_Password` =$_POST[password]';
   mysqli_query($connection, $query);
   header('location:display.php');
}
else
{
   echo "something went wrong";
}

?>

<!--if(mysqli_connect_error())
$request = " insert into admin_form(name, password) values
   ('$name', '$password') ";
{
   echo "cannot connect";
}
else{
   echo "connected";
}-->


