


<?php

$connection = mysqli_connect('localhost:3307','root','','book_db');

if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   $request = " insert into login_form(name, email, password) values('$name','$email','$password') ";
   mysqli_query($connection, $request);

   header('location:login.php'); 

}else{
   echo 'something went wrong please try again!';
}

?>