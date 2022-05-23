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
   
    $q = "INSERT INTO `crudtable1`(`name`, `email`,`phone`, `address`,`destination`, `guests`,`arrival`,
     `departure`) VALUES ('$name','$email','$phone','$address','$destination','$guests','$arrival','$departure')";

    $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
      html{
          background:#d5af89;
      }
      h1{
        background:#be9c79;
        color:saddlebrown;
      }
      
    form{    
        border:0.4rem solid saddlebrown;
    border-radius:15px 15px;
    margin-left:4rem;
    margin-right:4rem;
    
      }
      label{
          text-align:center;
          font-size:1.5rem;
      }
    input{
    padding:1rem;
    font-size:1.6rem;
    color:black;
    text-transform:none;
    flex:1 1 2rem;
    border:0.2rem solid black;
    }
    button{
    display:inline-block;
    margin-top:1 rem;
    cursor:pointer;
    width:40%;
    height:10%;
    border:0.2rem solid black;
    border-radius:10px 10px;
    background-color:rgb(166, 86, 28);
    font-size:1.5rem;
    text-align:center;
    }
    
     button:hover{
    background-color:sandybrown;
     }


      </style>
</head>
<body  style="background:#d5af89;">

<header class="header" style="position:sticky;
    top:0; right: 0; left: 0;
    background-color:sandybrown;
    box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    z-index: 1000;
    border-top: 0.6rem solid black;
    border-bottom:0.6rem solid black;">

    <section class="flex" style=" display:flex;
    align-items:center;
    justify-content:space-between;
    position:relative;
    padding:1.5rem 2rem;">


        <a href="#home" class="logo">
            <img src="images/logo.jpeg" alt="logo" style="height:2rem; margin-top:-2.1rem;">
        </a>
        <div class="logoname" style="display:flex;
    font-size:3rem;
    margin-top:-1rem;
    margin-right:40rem;
    color:black;
    font-family:'Faustina', serif;"><p>THE ISLAND.COM</p></div>


        <nav class="navbar" style="margin-left:12px;
        margin-top:-1rem;
    font-size:1.6rem;
    color:black;
    gap:2rem;">

        <a href="index.php" style="text-decoration:underline;
    color:black;
    font-size:1.6rem;">Home</a>
                <a href="admin.php"  style="text-decoration:underline;
    color:black;
    font-size:1.6rem; gap:2rem;">Login</a>
    <a href="insert.php"  style="text-decoration:underline;
    color:black;
    font-size:1.6rem; gap:2rem;">Sign Up</a>
       </nav>

</section>

</header>
<br>
<br>
<br>
<section>
<div class="col-lg-6  m-auto">
    <form method="post">
        <div class="card">
        <div class="card" style="background-color:#F1EADD;" >
            <!--<div class="card-header bg-dark">-->
                <h1 class="text-center">Booking Form</h1>
                <br>
        <label>Name:</label>
        <div class="inputBox" style="height:70px;width:70%;margin-left:6rem;">
        <input type="text" name="name"  class="form-control">
    </div> 
        <label>Email:</label>
       <div class="inputBox" style="height:70px;width:70%;margin-left:6rem;">
        <input type="email" name="email" class="form-control"><br>
    </div>
        <label>Phone No:</label>
        <div class="inputBox" style="height:70px;width:70%;margin-left:6rem;">
        <input type="number" name="phone"  class="form-control"><br>
    </div>
        <label>Address:</label>
        <div class="inputBox" style="height:70px;width:70%;margin-left:6rem;">
        <input type="text" name="address" class="form-control"><br>
    </div>
        <label>Destination:</label>
        <div class="inputBox" style="height:70px;width:70%;margin-left:6rem;">
        <input type="text" name="destination"  class="form-control"><br>
    </div>
        <label>Guests:</label>
        <div class="inputBox" style="height:70px;width:70%;margin-left:6rem;">
        <input type="number" name="guests" class="form-control"><br>
    </div>
        <label>Arrival:</label>
        <div class="inputBox" style="height:70px;width:70%;margin-left:6rem;">
        <input type="date" name="arrival"  class="form-control"><br>
    </div>
        <label>Departure:</label>
        <div class="inputBox" style="height:70px;width:70%;margin-left:6rem;">
        <input type="date" name="departure" class="form-control"><br>
    </div>
    <div class="inputBox" style="margin-left:13.5rem;">
        <button class="btn btn-success" type="submit" name="done"> Submit </button>
    </div>
<br>
    </div>     
    </div> 
    </section>
    </nav>


</html>
<!--border:0.4rem solid saddlebrown;
    border-radius:15px 15px;
    margin-left:4rem;
    margin-right:4rem;
    width:700px;