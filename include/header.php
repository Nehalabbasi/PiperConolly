<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'include/css.php';?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
    <link href="https://fonts.cdnfonts.com/css/adelia-free" rel="stylesheet">
</head>

<body>


    <header class="header_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-nav">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Biography</a></li>
                            <li><a href="">Music</a></li>
                            <li><a href="">Theater & performance </a></li>
                            <li><a href="">Gallery </a></li>
                            <li><a href="">Subscribe</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="header-end">
                        <ul>
                            <li><a href=""><i class='bx bxl-spotify'></i></a></li>
                            <li><a href=""><i class='bx bxl-youtube'></i></a></li>
                            <li><a href=""><i class='bx bxl-instagram'></i></a></li>
                            <li><a href=""><i class='bx bxl-soundcloud'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>