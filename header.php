<!-- Navigation Bar -->
<?php @session_start();?>
    <nav>
        <img src="Logo.png" alt="" class="logo" height="70" width="auto">

        <input type="checkbox" id="hamburger-toggle">
        <label for="hamburger-toggle" class="hamburger">
            <i class="fas fa-bars" id="iconopen" onClick="buttonopenclose()"></i>
            <i class="fas fa-times" id="iconclose" onClick="buttonopenclose()"></i>
        </label>

        <ul class="nav__list">
            <li class="navbar__item"><a href="index.php" class="navbar__itemLink ">Hotel</a></li>
            <li class="navbar__item"><a href="rooms.php" class="navbar__itemLink">Rooms</a></li>
            <li class="navbar__item"><a href="dining.php" class="navbar__itemLink">Dining</a></li>
            <?php
            if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin'])==true)
    {
        echo '<li class="navbar__item"><a href="myaccount.php" class="navbar__itemLink">My Account</a></li><li class="navbar__item"><a href="logout.php" class="navbar__itemLink">Logout</a></li>
            ';
        }
else echo'
            <li class="navbar__item"><a href="login.php" class="navbar__itemLink">Book Your Stay</a></li>';?>
            <li class="navbar__item"><a href="contact.php" class="navbar__itemLink">Contact Us</a></li>
        </ul>
    </nav>
