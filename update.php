<?php


include 'conn.php';

if(isset($_POST['done'])){
    
    $id= $_GET['id'];
    $username= $_POST['username'];
    $password= $_POST['password'];
   
    $q = "UPDATE `crudtable` SET `id`='$id',`username`='$username',`password`='$password' WHERE `id`='$id' ";

    $query = mysqli_query($con,$q);

    header('location:display.php');
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
<body style="background:#d5af89;">

<br>
<br>
<br>
<br>
<div class="col-lg-6 m-auto" style="background:#d5af89;">
    <form method="post">
       <div class="card" style="background-color:#F1EADD;">
            <!--<div class="card-header bg-dark">-->
                <h1 class="text-center">Sign Up</h1>

        <!--</div>-->
<br>     
        <label>Username:</label>
        <div class="inputBox" style="height:20px;width:70%;margin-left:6rem;">
        <input type="text" name="username" class="form-control form-control-sm" style="border:0.1rem solid black;"><br>
        </div>
        <br>
        <label>Password:</label>
        <div class="inputBox" style="height:20px;width:70%;margin-left:6rem;">
        <input type="password" name="password" class="form-control form-control-sm" style="border:0.1rem solid black;"><br>
</div>
<br>
<br>
<div class="inputBox" style="margin-left:13.5rem;">
        <button type="submit" name="done">Submit</button>
</div>
        <br>
        </div>       
</div>

</body>
</html>
<!--
<div class="col-lg-6 m-auto">
    <form method="post">
        <br>
        <br><div class="card">
            <div class="card-header bg-dark">
                <h1 class="text-white text-center">Update</h1>

        </div>
<br>
        <label>Username</label>
        <input type="text" name="username"  class="form-control"><br>

        <label>Password</label>
        <input type="password" name="password" class="form-control"><br>

        <button class="btn btn-success" type="submit" name="done"> Submit </button>
<br>
        </div>       
</div>

</body>
</html>-->