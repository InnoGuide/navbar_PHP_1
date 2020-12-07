<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top" id="navbar">
        <div class="container-fluid">
            <!----Brand-->
            <span class="navbar-brand d-flex align-items-center">
                <i class="fa fa-star fa-2x text-warning"></i>
                <a href="../php-sites/home.php" class="text-decoration-none text-white pl-4">
                    <b>star</b>
                </a>
            </span>
            <!--Toggler-Icon-->
            <div data-toggle="collapse" data-target="#menue" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </div>
            <!---------Menue -->
            <div id="menue" class="collapse  navbar-collapse justify-content-end ">
                <ul class="navbar-nav text-center">
                    <li class="nav-item <?=$home?>"><a class="nav-link text-white" href="../php-sites/home.php">Home</a></li>
                    <!-- dropdown-menu------------>
                    <li class="dropdown <?=$kurs?>">
                        <div class="nav-link dropdown-toggle dropdown text-white" role="button" data-toggle="dropdown">
                            Kurse
                        </div>
                        <ul class="dropdown-menu bg-info text-center pb-0">
                            <li class="nav-item <?=$vormittag?>"><a class="nav-link text-white" href="../php-sites/vormittag.php">Vormittags</a></li>
                            <li class="nav-item <?=$nachmittag?>"><a class="nav-link text-white" href="../php-sites/nachmittag.php">Nachmittags</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper" class="d-flex">
        <!-------------Sidebar-------------------------------------------->
        <nav id="sidebar" class=" bg-info fixed-top">
            <ul class="navbar-nav">
                <li class="p-3 d-flex justify-content-center <?=$ueberUns?>" >
                    <a href="../php-sites/ueberUns.php" class="text-white text-decoration-none d-flex justify-content-between">
                        <i class="fa fa-file-text-o fa-2x"></i>
                        <span class="align-self-center">Über Uns</span>
                    </a>
                </li>
                <li class="p-3 d-flex justify-content-center <?=$kontakt?>">
                    <a href="../php-sites/kontakt.php" class="text-white text-decoration-none d-flex justify-content-between">
                        <i class="fa fa-envelope-o fa-2x"></i>
                        <span class="align-self-center">Kontakt</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!--------------------Content-------------------------------------->
        <div id="content">