<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="Icon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
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

    <!-- Rooms Section -->
    <div class="offers">
        <h2 class="offers__heading">Rooms</h2>
        <div class="row">
            <!-- Section -->
            <div class="rowsectionone">
                <div class="card">
                    <img src="Images/rooms6.jpg" alt="" class="card__image">
                    <div class="card__details">
                        <h1 class="card__detailsHeading">Single Room</h1>
                        <div class="card__detailsButtons">
                            <div class="button__groups">
                                <a href="" class="button">Price = 2000 INR</a>
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
                        <h1 class="card__detailsHeading">Double Room</h1>
                            <div class="card__detailsButtons">
                            <div class="button__groups">
                                <a class="button">Price - 3000 INR</a>
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
                        <h1 class="card__detailsHeading">Deluxe Room</h1>
                            <div class="card__detailsButtons">
                            <div class="button__groups">
                                <a href="" class="button">Price = 5000 INR</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="online_food_delivery_box animated bounceInDown" id="input_box">
        <h3> Book Room </h3><br>
        
            <?php 
            if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin'])==true)
    {
        echo '<form action="handleroomloggedin.php" method="post">';
    }
    else
        {
            
            echo '<form action="handleroom.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="form-control" id="username" placeholder="Username" >
            </div>
            <div class="form-group">
                <input type="password" name="pass" class="form-control" id="password" placeholder="Password"  >
            </div>';}?>
            <div class="form-group">
                <select class="form-control" name="roomtype" id="room_type" onchange="finalPrice()">
                    <option value="0"> Select Room Type ... </option>
                    <option value="2000"> Single Room </option>
                    <option value="3000"> Double Room </option>
                    <option value="5000"> Deluxe Room </option>
                </select>
            </div>
            <div class="form-group">
                <select class="form-control" name="nights" id="nights" onchange="finalPrice()">
                    <option> Select No. of Nights ... </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                    <option value="4"> 4 </option>
                    <option value="5"> 5 </option>
                    <option value="6"> 6 </option>
                </select>
            </div>
           <br/>
            <div class="form-group">
                <label>Total Cost (&#8377) : </label>
                <span id="result" style="background-color: #8c7269;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;">0</span>
                <input type="submit" value="Book Now" class="btn btn-primary" style="float: right" id="ok" onclick="ok_result()">
            </div>
        </form>
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

    <script src="rooms.js"></script>
</body>
</html>

<?php
 if (stripos($_SERVER['REQUEST_URI'], 'booking' )!==false){
    $fp=$_GET['booking'];
    if($fp=="done"){ echo '<script>swal("SUCCESS", "Your room have been successfully booked.", "success");</script>';}
    else echo '<script>swal("ERROR", "Unable to process! Try again.", "error");</script>';
    }

?>