<?php 
session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css_5/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./css/css_5/bootstrap.min.css">  
    <link rel="stylesheet" href="./css/css_5/admin.css">

</head>
<body>

   
    <div class="container">
     
        <div class="admin-form">
             
            <form action="connect.php" method="POST">
                <div class="logo">
                    <img src="./image/College logo.png" alt="">
                    </div>
                    <h5>Login to your account</h5>

                <div class="form-group">
                    <label for="user"></label>
                    <input type="text" placeholder="user" name="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass"></label>
                    <input type="text" name="pass" placeholder="password" class="form-control">
                </div>  

                <button class="btn btn-primary" type="submit" name="submit">submit</button>
            </form> 

            <div class="admin-img ">
                <img src="./image/nature.jpg" alt="">
            </div>
        </div>

    </div>




<!-- ...................script...................... -->

<script src="./js/js_5/jquery-3.6.0.js"></script>
<script src="./js/js_5/bootstrap.min.js"></script>
 

</body>
</html>