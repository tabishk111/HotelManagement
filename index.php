<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="Icon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <title>City Palace</title>
</head>
<body>
    <?php include "header.php";?>
    <!-- Carousel -->
    <div class="carousel">
        <!-- Carousel Images -->
        <div class="carousel__imagesTransition">
            <img name='slide' class="carousel__image" id="#gallery"/>
        </div>

        <!-- Left Button -->
        <a class="carousel__leftButton">
            <span id="left" class="carousel__leftButtonSymbol">
                <img src="LeftIcon.png" alt="Left Icon" height="50" width="auto">
            </span>
        </a>

        <!-- Right Button -->
        <a class="carousel__rightButton">
            <span id="right" class="carousel__rightButtonSymbol">
                <img src="RightIcon.png" alt="Right Icon" height="50" width="auto">
            </span>
        </a>
    </div>

    <!-- Welcome Section -->
    <div class="welcome">
        <!-- Ḥeading -->
        <h2 class="welcome__heading">Welcome To City Palace</h2>
        <img src="Images/design.png" alt="Design" class="welcome__image">

        <!-- Details -->
        <div class="welcome__details">
            <p class="paragraphone">
                The Palace has a surprisingly harmonious blend of east and west and is considered among the most remarkable royal residences built during the 19th century. Its Architect, Sir Samuel Swinton Jacob, valued the contribution of local Indian craftsmen. The result is a grand structure with classical Mughal and Rajput touches adorning the exterior, and British-inspired interiors, complete with billiard, and card rooms. It is said to be Jacob’s finest creation.
            </p>
            <p class="paragraphone">
                The exterior of City Palace is covered with impossibly delicate stone carving and has the distinctive hue of the red sandstone of the Thar Desert. The cupolas domes and balconies were carved by local craftsman with such delicacy that even today the solid red sand stone has the fragile appearance of lace.
            </p>
            <p class="paragraphone">
                Guests may sample traditional local delicacies as well as continental fare and can dine al fresco in royal style, to the accompaniment of Rajasthani folk music and dance.
            </p>
            <p class="paragraphone">
                The City Palace is perfect for those looking for nothing less than a royal experience – palatial rooms, exquisite gardens, and dancing peacocks are all included.
            </p>
        </div>
    </div>

    <!-- Offers Section -->
    <div class="offers">
        <h2 class="offers__heading">Offers & Promotions</h2>
        <div class="row">
            <!-- Section -->
            <div class="rowsectionone">
                <div class="card">
                    <img src="Images/rooms6.jpg" alt="" class="card__image">
                    <div class="card__details">
                        <h1 class="card__detailsHeading">Suite Surprises</h1>
                        <p class="card__detailsText">
                            Great value on Suite bookings. Get 50% savings on second night and 25% savings on every additional night.
                        </p>
                        <div class="card__detailsButtons">
                            <div class="button__groups">
                                <a href="" class="button">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section -->
            <div class="rowsectionone">
                <div class="card">
                    <img src="Images/rooms3.webp" alt="" class="card__image">
                    <div class="card__details">
                        <h1 class="card__detailsHeading">City Holidays</h1>
                        <p class="card__detailsText">
                            Realize cherished moments for a lifetime with every City Holiday, crafted with impeccable details just for you and your loved ones.
                        </p>
                            <div class="card__detailsButtons">
                            <div class="button__groups">
                                <a href="" class="button">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section -->
            <div class="rowsectionone">
                <div class="card">
                    <img src="Images/rooms2.webp" alt="" class="card__image">
                    <div class="card__details">
                        <h1 class="card__detailsHeading">Book Online</h1>
                        <p class="card__detailsText">
                            Plan your awaited holiday with loved ones at our treasured destinations. Enjoy our warm hospitality across authentic royal palaces.
                        </p>
                            <div class="card__detailsButtons">
                            <div class="button__groups">
                                <a href="" class="button">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Destination Section -->
    <div class="offers">
        <h2 class="offers__heading">Destinations</h2>
        <div class="row">
            <div class="rowsectionone">
                <div class="card">
                    <img src="Images/Udaipur1.jpg" alt="" class="card__image">
                    <div class="card__details">
                        <h1 class="card__detailsHeading">Udaipur</h1>
                        <!-- <p class="card__detailsText">
                            Great value on Suite bookings. Get 50% savings on second night and 25% savings on every additional night.
                        </p> -->
                        <div class="card__detailsButtons">
                            <div class="button__groups">
                                <a href="" class="button">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rowsectionone">
                <div class="card">
                    <img src="Images/jaipur.jpg" alt="" class="card__image">
                    <div class="card__details">
                        <h1 class="card__detailsHeading">Jaipur</h1>
                        <div class="card__detailsButtons">
                            <div class="button__groups">
                                <a href="" class="button">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rowsectionone">
                <div class="card">
                    <img src="Images/lucknow.jpg" alt="" class="card__image">
                    <div class="card__details">
                        <h1 class="card__detailsHeading">Lucknow</h1>
                        <div class="card__detailsButtons">
                            <div class="button__groups">
                                <a href="" class="button">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="offers">
        <h2 class="offers__heading">Features</h2>
        <div class="row">
            <div class="rowsectiontwo">
                <div class="card">
                    <img src="Images/1.jpg" alt="" class="card__imageFeatures">
                    <div class="card__details">
                        <h1 class="card__detailsFeatures">ROYAL ROOMS</h1>
                    </div>
                </div>
            </div>

            <div class="rowsectiontwo">
                <div class="card">
                    <img src="Images/wifi.webp" alt="" class="card__imageFeatures">
                    <div class="card__details">
                        <h1 class="card__detailsFeatures">Wifi Access</h1>
                    </div>
                </div>
            </div>

            <div class="rowsectiontwo">
                <div class="card">
                    <img src="Images/cash1.jpg" alt="" class="card__imageFeatures">
                    <div class="card__details">
                        <h1 class="card__detailsFeatures">Pay at Hotel</h1>
                    </div>
                </div>
            </div>
            <div class="rowsectiontwo">
                <div class="card">
                    <img src="Images/history.PNG" alt="" class="card__imageFeatures">
                    <div class="card__details">
                        <h1 class="card__detailsFeatures">Architecture</h1>
                    </div>
                </div>
            </div>
            <div class="rowsectiontwo">
                <div class="card">
                    <img src="Images/heritage.PNG" alt="" class="card__imageFeatures">
                    <div class="card__details">
                        <h1 class="card__detailsFeatures">Heritage Walk</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Foooter -->
    <div class="footer">

        <!-- Footer Logo -->
        <div class="footer__image">
            <a href="index.php" class="footer__link">
                <img src="Logo2.png" alt="City Palace Logo" class="footer__logo"/> 
                <img src="Images/design2.png" alt="Design" class="welcome__image">
            </a>
        </div>

        <!-- Social Media -->
        <ul class="footer__socialMedia">
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
            </li>
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-github fa-2x"></i>
                </a>
            </li>
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
            </li>
            <li class="footer__socialMediaItems">
                <a href="" class="socialMedia__Links" target="_blank" rel="noreferrer">
                    <i class="fab fa-linkedin-in fa-2x"></i>
                </a>
            </li>
        </ul>

        <!-- Copyright Information -->
        <div class="copyright">
            <div class="copyright__info">
                © 2021 Copyright: 
                <a href="index.php" class="copyright__infoLink"> CityPalace</a>
            </div>
        </div>
    </div>
 <script src="alert.js"></script>
    <script src="index.js"></script>
    
</body>
</html>
<?php
//     if (stripos($_SERVER['REQUEST_URI'], 'login' )!==false){
//     $login=$_GET['login'];
//     if($login=="true") echo "<script>showSwal('login-success')</script>";
//     else echo "<script>showSwal('login-failure')</script>";
//     $url_dir=$_SERVER['REQUEST_URI']; 

// $url_dir_no_get_param= explode("?",$url_dir)[0];

// echo $_SERVER['HTTP_HOST'].$url_dir_no_get_param;
// }
// if (stripos($_SERVER['REQUEST_URI'], 'logout' )!==false){
//     @$logout=$_GET['logout'];
//     if($logout=="success") echo "<script>showSwal('logout-success')</script>";
//     else echo "<script>showSwal('logout-failure')</script>";
// $url_dir=$_SERVER['REQUEST_URI']; 

// $url_dir_no_get_param= explode("?",$url_dir)[0];

// echo $_SERVER['HTTP_HOST'].$url_dir_no_get_param;}

if (stripos($_SERVER['REQUEST_URI'], 'login' )!==false){
    $fp=$_GET['login'];
    if($fp=="true"){ echo '<script>swal("SUCCESS", "Your have been succesfully logged in. Enjoy our services", "success");</script>';}
    else echo '<script>swal("ERROR", "Unable to log you in! Try again.", "error");</script>';
    }
    if (stripos($_SERVER['REQUEST_URI'], 'logout' )!==false){
    $fp=$_GET['logout'];
    if($fp=="true"){ echo '<script>swal("SUCCESS", "Your have been succesfully logged out.", "success");</script>';}
    else echo '<script>swal("ERROR", "Unable to log you out! Try again.", "error");</script>';
    }

?>