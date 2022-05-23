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
                <a href="#about">About</a>
                <a href="#packages">Packages</a>
                <a href="#reviews">Reviews</a>
                <a href="insert1.php">Book</a>
                <a href="admin.php">Login</a>
                
        </nav>

    </section>
    
</header>

    <div class="login-bg">

        <section class="login" id="login">

            <h1 class="heading-title">Sign Up</h1>

           <form action="login_form.php" method="post" class="login-form"><!---->
               <div class="flex">

                <div class="inputBox">
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="email" placeholder="Enter your email" name="email">
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="password" placeholder="Enter your password" name="password">
                </div>
               </div>
            <br>
            
            <input type="submit" value="Sign Up" class="btn" name="send">
            <br><br>
            <br>
            <!--<h6><a href="login.php" ><font face="verdana" 
                color="saddlebrown">Sign up</font></a></h6>-->
            </div>
           </form>
          </section>
          
        </div>
        
        
    <script src="js/script.js"></script>
</body>
</html>