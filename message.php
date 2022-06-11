<?php

include 'connect.php';


if(!isset($_SESSION['user'])){
    header('location:login.php');
}

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_post['message'];
    $q = "select * from userinfo";

    $query = mysqli_query($con, $q);

 
    
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./css/css_5/bootstrap.min.css">
    <link rel="stylesheet" href="./css/css_5/admin.css">
</head>

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading text-left py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"> <img
                    src="./image/College logo.png" alt="">
                <h6> Paul <br> Theological <br> Seminary </h6>
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard.php" class="list-group-item list-group-item-action active"><i
                        class="fa fa-tachometer me-2"></i>Dashboard</a>
                <a href="projects.php" class="list-group-item list-group-item-action  fw-bold"><i
                        class="fa fa-camera-retro me-2"></i>Gallery</a>
                <a href="message.php" class="list-group-item list-group-item-action  fw-bold"><i
                        class="fa fa-envelope me-2"></i>Messages</a>

                <a href="login.php" class="list-group-item list-group-item-action logout fw-bold"><i
                        class="fa fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa fa-bars primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-bold text-dark" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu logout" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


            <div class="row my-5 ata-bs-spy= scroll">

                <h3 class="fs-4 mb-3">Messages</h3>
                <div class="col">
                    <div class="container-fluid">

                        <table class="table bg-white rounded shadow-sm table-striped  table-hover">

                            <tr class="bg-white text-white ">
                                <th scope="col" width="50">id</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">mobile</th>
                                <th scope="col">message</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Update</th>
                            </tr>


    <?php 


            $q = "select * from userinfo";

            $query = mysqli_query($con, $q);


            while($res = mysqli_fetch_array($query)){

            
            ?>

                 <tr>
                      <td>
                          <?php echo $res['id']; ?>
                      </td>
                      <td>
                          <?php echo $res['name']; ?>
                      </td>
                      <td>
                          <?php echo $res['email']; ?>
                      </td>
                      <td>
                          <?php echo $res['mobile']; ?>
                      </td>
                      <td>
                          <?php echo $res['message']; ?>
                      </td>
                      <td><button class="btn btn-primary"><a class="text-white"
                                  href="delete.php?id=<?php echo $res['id']; ?>">delete</a></button></td>
                      <td><button class="btn btn-success"><a class="text-white"
                                  href="update.php?id=<?php echo $res['id']; ?>">update</a></button></td>

                 </tr>

    <?php

        }

             ?>


                
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>



    <!-- ..............script.............. -->

    <script src="./js/js_5/jquery-3.6.0.js"></script>
    <script src="./js/js_5/bootstrap.min.js"></script>

    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>



</html>