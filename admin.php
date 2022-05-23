
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Customer Login</title>
    <style>
        h6 {margin-left:45rem;
            font-size:3rem; 
            font-style:'Faustina', serif;
            text-decoration:underline;
        }

                
.admin-bg{
    background:white;
}
.admin-bg h1{
    font-size:5rem;
    color:rgb(106, 47, 5);
    text-align: center;
}

.admin .admin-form{
    padding:2rem;
    background:beige;
    
    border:0.4rem solid saddlebrown;
    border-radius:15px 15px;
    

}

.admin .admin-form .flex .inputBox{
    flex:1 1 41rem;
   margin-left:34rem;
}

.admin .admin-form .flex .inputBox input{
    text-align:center;
    width:50%;
    padding:1.8rem;
    font-size:2rem;
    color:black;
    text-transform:none;
    margin-top:5rem;
    border:0.2rem solid black;
}

.admin .admin-form .flex .inputBox input:focus{
    background:black;
    color:white;

}

.admin .admin-form .flex .inputBox input:focus:placeholder{
    background:black;
    color:lightblue;
}

.admin .admin-form .flex .inputBox span{
    font-size:2rem;
    color:saddlebrown;
}

.admin .admin-form .btn{
    margin-top:2rem;
    margin-left:45rem;
}

        </style>
</head>
<body>

<!--header section starts here-->

<header class="header">

    <section class="flex">


        <a href="#home" class="logo">
            <img src="images/logo.jpeg" alt="logo">
        </a>
        <div class="logoname"><p>THE ISLAND.COM</p></div>


        <nav class="navbar">
        <a href="index.php">Home</a>
                <a href="#packages">Packages</a>
                <a href="#reviews">Reviews</a>
                <a href="insert1.php">Book</a>
                <a href="insert.php">Sign Up</a>
               
        </nav>



    </section>

</header>

    <div class="admin-bg">

        <section class="admin" id="admin">

            <h1 class="heading-title">Admin Login</h1>

           <form action="admin_form.php" method="post" class="admin-form"> <!---->
               <div class="flex">

                <div class="inputBox">
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <br>
                <br>
                <!--<div class="inputBox">
                    <input type="email" placeholder="Enter your email" name="email">
                </div>-->
                <div class="inputBox">
                    <input type="password" placeholder="Enter your password" name="password">
                </div>
               <br>
               <br>
               <input type="submit" value="Login" class="btn" name="send">
            <br><br>
            <br>
            </div>
           </form>
          </section>
          
        </div>
    
    <script src="js/script.js"></script>
</body>
</html>

<!--
if(isset($_POST['send'])){
    
    $name = $_POST['name'];
    $password = $_POST['password'];
 
    $request = " insert into admin_form(name, password) values
    ('$name', '$password') ";
    mysqli_query($connection, $request);
 
    header('location:admin.php'); 
 
 }else{
    echo 'something went wrong please try again!';
 }-->