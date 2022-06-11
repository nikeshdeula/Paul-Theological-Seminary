<?php 
include 'connect.php';

if(isset($_POST['submit'])){



$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];
$q = "UPDATE `userinfo` SET  id =$id, name='$name', email='$email', mobile='$mobile', message='$message' WHERE id =$id";

$query = mysqli_query($con, $q);

header('location:message.php');

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <script src="https://kit.fontawesome.com/18a12ba8fd.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/Paul_Theological_Seminary.css">
</head>

<body>

<!-- .....Top Bar......... -->

<div class="contact-section">
        <div class="row">
            <div class="container">
                <i class="fa-solid fa-location-dot address"> &nbsp; &nbsp; Bhaisepati,&nbsp; Lalitpur,&nbsp; Nepal</i>
                <i class="fa-solid fa-envelope email"> &nbsp; &nbsp; paul.theological@gmail.com</i>
                <i class="fa-solid fa-phone contact"> &nbsp; &nbsp; 977-1-5592728</i>
            </div>
        </div>
        </div>




    <!-- .......navbar....... -->


    
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="./image/College logo.png" alt="">
                <h3>Paul <br> Theological <br> Seminary</h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item home">
                        <a class="nav-link " href="index.php">Home
                            <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Course
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">course i</a>
                            <a class="dropdown-item" href="#">course ii</a>
                            <a class="dropdown-item" href="#">course iii</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Blogs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item"
                                href="news_and_events.php">News and Events</a>
                            <a class="dropdown-item" href="activities.php">Activities</a>
                            <a class="dropdown-item" href="#">Videos</a>
                            <a class="dropdown-item" href="#">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item contact_item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
     </nav>

    <!-- .........contact flex........ -->

    <section class="contact_flex">
        <div class="container">
            <div class="contact_flex_content">
            <div class="contact_flex_1"> 
                <img src="./image/contact.png"  alt="">
                    <h5>Contact Us</h5>
                    <h6>977-1-5592728</h6>
                </div>
                <div class="contact_flex_2"> 
                <img src="./image/email.png"  alt="">
                    <h5>Email Us</h5>
                    <h6>paul.theological@gmail.com</h6>
                </div>
                <div class="contact_flex_3">
                <img src="./image/location.png" alt="">
                    <h5>Our Location</h5>
                    <h6> Bhaisepati,  Lalitpur,  Nepal</h6>
                </div>
            </div>
        </div>

<form  method="post" class="Contact_submit">
            <h4>Update Message</h4>
<div class="container">
 <div class="submit_content">
    <div class="submit_content_1">
                
                    <label for="name" class="form-label" ></label>
                    <input type="text" class="form-control" placeholder="Name" name="name" >
                  

                    <label for="email" class="form-label"></label>
                    <input type="email" class="form-control" placeholder="Email" name="email">
                   
                    <label for="mobile" class="form-label"></label>
                    <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                   
     </div>

    
     <div class="message">
            <label for="message" class="form-label"></label>
            <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message" name="message" name="message"></textarea>
            
        </div>
    <div class="text-center">
   <button type="submit" class="btn" name="submit">Update</button>
   </div>

             
 </div>
                    
</div>

   
</form>


            <!-- .............map............. -->

        </section>

        <section class="map">
                <div class="map_content">
                <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.7807225345878!2d85.27895471498755!3d27.69317138279785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb187a97f390b1%3A0xec3f47092df0d4ca!2sKalanki%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1651505424241!5m2!1sen!2snp"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
        </section>
    </section>

    
    
    <!-- ...........footer............ -->

    <footer class="footer">
            <div class="container">
                <div class="footer_content">
                    <div class="footer_1">
                        <img src="./image/College logo.png" alt=""> <br>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                    <div class="footer_2">
                        <h5>Quick Links</h5> <br>
                       <ul>
                           <li><a href="#">About us</a></li>
                           <li><a href="#">Blogs</a></li>
                           <li><a href="#">Course</a></li>
                           <li><a href="#">Contact Us</a></li>
                       </ul>
                    </div>
                    <div class="footer_3">
                        <h5>Find Us on</h5> <br>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.7807225345878!2d85.27895471498755!3d27.69317138279785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb187a97f390b1%3A0xec3f47092df0d4ca!2sKalanki%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1651505424241!5m2!1sen!2snp"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>

                </div>
            </div>

            <section class="footer_credit">
                <h6>Created with <i class="fa fa-heart" aria-hidden="true"></i> by Nikesh</h6>
            </section>
        </footer>


        <!-- .......script... -->

        <script src="./js/jquery.js"></script>
        <script src="./js/bootstrap.min.js"></script>
</body>

