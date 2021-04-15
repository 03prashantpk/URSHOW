<?php
session_start();

error_reporting(E_ERROR | E_PARSE);

if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $password = $_POST['pwd'];
    if (empty($username)) {
        echo "Please enter a username<br>";
    } else $username = $username;

    if (empty($password)) {
        echo "Please enter a password<br>";
    } else $password = $password;
    $text = $username . "," . $password . "\
";
    $fp = fopen('accounts.txt', 'a+');
    $path = 'accounts.txt';
    if (file_exists($path)) {
        $contents = file_get_contents($path);
        $contents = explode("\
", $contents);
        $users = array();
        foreach ($contents as $value) {
            $user = explode(',', $value);
            $users[$user[0]] = $user[1];
        }
        if (isset($users[$_POST['name']])) {

            $message7 = $username;
            $message9 = '<a  href="index.php" style="text-transform: capitalize; width: 85px; color: #fff;"> Logout <i class="fa fa-sign-out"></i></a>';
        }
    } else {
        echo "NO";
    }
    if (!empty($username) && !empty($password)  && !isset($users[$_POST['name']])) {
        $noacc = "Account doesn't Exist ";
        $success_meg = 'Please Create a new account <a href="register.php" style="color: #f80000; font-weight:600;">Sign Up</a>';
        echo '<script type="text/javascript">';
        echo 'alert("Please Create an Account register.php");';
        echo '</script>';
        echo '';
    }
    fclose($fp);
    $path = 'accounts.txt';
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>UR.SHOW - Home</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/mystyle.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <!-- Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

    <!-- Font awesome-->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="assets/css/extra/fontawesome.js" crossorigin="anonymous"></script>

    <!-- New slider codes--->




</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo" style="color: #f80000;">
                            Ur.Show
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="about-us.html">About</a></li>
                            <li class="scroll-to-section"><a href="register.php">Register</a></li>

                            <!--<li class="scroll-to-section"><a href="#projects">Projects</a></li>-->
                            <!-- <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Features</a></li>
                                    <li><a href="">FAQ's</a></li>
                                    <li><a href="">Blog</a></li>
                                </ul>
                            </li>-->
                            <li class="scroll-to-section"><a href="contact-us.html">Contact Us</a></li>
                            <li class="scroll-to-section"><a href="#about"></a></li>
                            <li class="scroll-to-section"><a href="#"> <?php echo $message7; ?></a></li>
                            <li class="scroll-to-section" style="color: #f80000; font-weight: 600;">
                                <?php echo $message9; ?></li>
                            <div class="search-icon">
                                <?php
                                if (!$message7 == '') {
                                    echo '';
                                } else {
                                    echo '<a href="#search" style="text-transform: capitalize; width: 85px; color: #fff; border-radius: 25px;">  LOGIN <i class="fa fa-user"></i></a>';
                                }
                                ?>
                            </div>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                    <p class="nav2" style="color: #fff; text-align: center;">
                        <a href="#" style="color: #fff;">
                            <span class="spancol">3D Movies</span> | <span class="spancol">Top Rated</span> | <span class="spancol">Order Popcorn</span> | <span class="spancol">Offers</span> | <span class="spancol">Gifts Card</span> </a>
                    </p>
                </div>
            </div>

        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="" method="post">

            <fieldset>
                <input type="text" class="input2" placeholder="Username" name="name" required>
            </fieldset>
            <fieldset>
                <input type="password" class="input3" placeholder="Password" name="pwd" required>
            </fieldset>
            <fieldset>
                <button type="submit" name="submit" class="main-button">Login</button>
            </fieldset>


        </form>
        <h3 style="text-align: center; color: #f1f1f1"><?php echo $noacc; ?></h3>
        <h3 style="text-align: center; color: #f1f1f1"><?php echo $success_meg; ?></h3>
    </div>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="https://iqonic.design/wp-themes/streamit_wp/wp-content/uploads/2020/12/sanddust2.jpg" style="opacity: 0.4;" alt="">
                    <div class="text-content">
                        <h3 style="padding-bottom: 10px; text-align: left;">
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i> 3/5 Imdb
                        </h3>
                        <h5 style="font-size: 52px; font-weight: 600; font-family: 'Dela Gothic One', cursive; text-align: left;">
                            Sand Dust
                            <br>
                            <span style="color: #ff0000; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Starring</span>
                            <span style="color: #e4e4e4; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Karen
                                Gilchrit, James Earl
                                Jones
                            </span>

                        </h5>

                        <a href="#" class="main-stroked-button" style="float: left;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                            Trailer
                        </a>
                        <a href="#" class="main-filled-button" style="float: left;"> <i class="fa fa-ticket" aria-hidden="true"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="https://wallpapercave.com/wp/wp4714650.jpg" style="opacity: 0.5;" alt="">
                    <div class="text-content">
                        <h3 style="padding-bottom: 10px; text-align: left;">
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true"></i> 4/5 Imdb
                        </h3>
                        <h5 style="font-size: 52px; font-weight: 600; font-family: 'Dela Gothic One', cursive; text-align: left;">
                            Joker
                            <br>
                            <span style="color: #ff0000; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Starring</span>
                            <span style="color: #e4e4e4; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Joaquin
                                Phoenix, Robert De Niro, Zazie Beetz
                            </span>

                        </h5>

                        <a href="#" class="main-stroked-button" style="float: left;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                            Trailer
                        </a>
                        <a href="#" class="main-filled-button" style="float: left;"> <i class="fa fa-ticket" aria-hidden="true"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="https://wallpapercave.com/wp/wp2111706.jpg" style="opacity: 0.4; width: 100%;" alt="">
                    <div class="text-content">
                        <h3 style="padding-bottom: 10px; text-align: left;">
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true"></i> 4/5 Imdb
                        </h3>
                        <h5 style="font-size: 52px; font-weight: 600; font-family: 'Dela Gothic One', cursive; text-align: left;">
                            Passenger
                            <br>
                            <span style="color: #ff0000; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Starring</span>
                            <span style="color: #e4e4e4; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Eric
                                Clark, Robert De Niro
                            </span>

                        </h5>

                        <a href="#" class="main-stroked-button" style="float: left;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                            Trailer
                        </a>
                        <a href="#" class="main-filled-button" style="float: left;"> <i class="fa fa-ticket" aria-hidden="true"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="https://wallpapercave.com/wp/wp6971712.jpg" style="opacity: 0.4; width: 100%;" alt="">
                    <div class="text-content">
                        <h3 style="padding-bottom: 10px; text-align: left;">
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i> 5/5 Imdb
                        </h3>
                        <h5 style="font-size: 52px; font-weight: 600; font-family: 'Dela Gothic One', cursive; text-align: left;">
                            Titanic
                            <br>
                            <span style="color: #ff0000; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Starring</span>
                            <span style="color: #e4e4e4; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">Jack
                                Dawson, Rose
                            </span>

                        </h5>

                        <a href="#" class="main-stroked-button" style="float: left;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                            Trailer
                        </a>
                        <a href="#" class="main-filled-button" style="float: left;"> <i class="fa fa-ticket" aria-hidden="true"></i> Book Now
                        </a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section">
        <a href="#about" style="background-color: #f80000;  box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034), 0 6.7px 5.3px rgba(0, 0, 0, 0.24), 0 12.5px 10px rgba(0, 0, 0, 0.199), 0 22.3px 17.9px rgba(0, 0, 0, 0.144), 0 41.8px 33.4px rgba(0, 0, 0, 0.185), 0 100px 80px rgba(0, 0, 0, 0.329); "><i class="fa fa-arrow-down"></i></a>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects" style="background-color: #121212;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3" style="border-right: #f80000 1px solid;">
                    <div class="section-heading">
                        <h3 style="padding-bottom: 8px; text-align: center; color: #f1f1f1">On Theater</h3>
                        <hr style="width: 50px;">
                        <form action="ticket.php" method="post">
                            <h5 style="padding: 8px; padding-left: 10px; font-size: 18px; color: #f1f1f1">Select Movie
                            </h5>
                            <div class="select">
                                <select name="movie" id="slct" required>
                                    <option selected disabled>Select a Movie </option>
                                    <option value="Titanic">Titanic</option>
                                    <option value="Passanger">Passanger</option>
                                    <option value="Sand Dust">Sand Dust</option>

                                    <option value="Spotlight">Spotlight</option>
                                    <option value="Interstellar">Interstellar</option>
                                    <option value="Aliens">Aliens</option>
                                    <option value="Distance Between Us">Distance Between Us</option>
                                    <option value="Dunkirk">Dunkirk</option>
                                </select>
                            </div>
                            <h5 style="padding: 8px; padding-left: 10px; font-size: 18px; color: #f1f1f1">Select Time
                            </h5>
                            <div class=" select">
                                <select name="time" id="slct" required>
                                    <option selected disabled>Show Time</option>
                                    <option value="2:00pm">2:00pm</option>
                                    <option value="3:30pm">3:30pm</option>
                                    <option value="8:00pm">8:00pm</option>

                                    <option value="4:00pm">4:00pm</option>
                                    <option value="6:30pm">6:30pm</option>
                                    <option value="9:30pm">9:30pm</option>
                                </select>
                            </div>


                            <h5 style="padding: 8px; padding-left: 10px; font-size: 18px; padding-top: 12px; color: #f1f1f1">
                                Want Snacks?</i>
                            </h5>
                            <div class="select">
                                <select name="snacks" id="slct" required>
                                    <option selected disabled>Snacks List</option>
                                    <option value="McAloo Tikki Burger">McAloo Tikki Burger</option>
                                    <option value="McSpicy Chicken Burger + Coke">McSpicy Chicken Burger + Coke</option>
                                    <option value="2 McAloo Tikki + 2 Fries (L)">2 McAloo Tikki + 2 Fries (L)</option>
                                    <option value="1 Cappuccino + 1 Iced coffee @ 99 Each">1 Cappuccino + 1 Iced coffee
                                        @ 99 Each</option>
                                    <option value="New Vanilla Chocolate muffin">New Vanilla Chocolate muffin</option>
                                    <option value="Sharing Pack 2 McVeggie">Sharing Pack 3 McVeggie</option>
                                </select>
                            </div>
                            <h5 style="padding: 8px; padding-left: 10px; font-size: 18px; color: #f1f1f1">Select No of
                                tickets </h5>
                            <div class="select">
                                <input type="number" maxlength="2" min="1" max="10" style="padding-left: 20px; background-color:#b9141c; color: #fff; border: none;" name="num1" placeholder="Max 10" id="num1" required>

                            </div>
                            <br>
                            <p id="theProduct" style="color: #f80000; padding-left: 20px; font-size: 22px;"><i class="fa fa-inr" aria-hidden="true"></i> <span style="float: right;  font-size: 16px; padding-right: 50px;">@
                                    250/person</span></p>
                            <!-- begin snippet: js hide: false console: true babel: null -->

                            <!-- language: lang-js -->
                            <script>
                                function doMath() {
                                    var numOne = document.getElementById('num1').value;
                                    var numTwo = document.getElementById('num2').value;
                                    var theProduct = parseInt(numOne) * parseInt(numTwo);
                                    var p = document.getElementById('theProduct');
                                    p.innerHTML += theProduct;
                                }
                            </script>
                            <!-- language: lang-html -->
                            <br>
                            <div style="padding-left: 20px;">
                                <input class="bookbtn" id="num2" type="hidden" value="250" name="num2" required>
                                <input type="button" value="Clear Price" onClick="location.href=location.href" style="font-size: 12px; padding: 4px; border-radius: 25px; background-color: #f80000; color: #fff; border: none;">
                                <input type="reset" value="Reset" onClick="reload" style="font-size: 12px; padding: 4px; border-radius: 25px; background-color: #f80000; color: #fff; border: none;">
                                <input type="button" value="Calculate" onclick="doMath()" style="font-size: 12px; padding: 4px; border-radius: 25px; background-color: #f80000; color: #fff; border: none;" />
                            </div>



                            <!-- end snippet -->

                            <br>
                            <div style="padding-left: 50px;">
                                <button type="submit" class="bookbtn" style="float: left; "> Book Now
                                </button>
                            </div>


                        </form>
                    </div>
                    <div class="filters">
                        <br>
                        <h3 style="padding-bottom: 8px; text-align: center; color: #f1f1f1">Filter</h3>
                        <hr style="width: 50px;">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".love">Romance</li>
                            <li data-filter=".war">War</li>
                            <li data-filter=".sifi">Si-fi</li>
                            <li data-filter=".dra">Drama</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h2 style="text-align: center; text-transform: capitalize; font-weight: 900; color: #f1f1f1">
                        hollywood
                        movies</h2>
                    <div class="filters-content">
                        <div class="row grid">

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all love">
                                <div class="item">
                                    <a href="https://youtu.be/kVrqfYjkTdQ" data-lightbox="image-1" data-title="Our Projects"><img src="https://movieposters2.com/images/782572-b.jpg" width="280px" width="340px" alt=""></a>
                                    <p class="movt">Titanic -<span style="text-align: left;">2h 29min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i> 5/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all love">
                                <div class="item">
                                    <a href="assets/images/project-big-item-02.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="https://i.pinimg.com/originals/d3/77/23/d37723f15bcdbdeb0c3610ea5c946141.jpg" alt=""></a>
                                    <p class="movt">Passanger -<span style="text-align: left;">2h 29min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i> 5/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dra">
                                <div class="item">
                                    <a href="assets/images/project-big-item-03.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="https://pbs.twimg.com/media/EKsuuz2XUAApmAY.jpg" alt=""></a>
                                    <p class="movt">Joker -<span style="text-align: left;">2h 29min</span><br>
                                        <span class="starr" style="padding-bottom: 4px;">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i> 5/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn" style="padding-bottom: 4px;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all sifi">
                                <div class="item">
                                    <a href="assets/images/project-big-item-04.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/movie-poster-template-design-21a1c803fe4ff4b858de24f5c91ec57f_screen.jpg" alt=""></a>
                                    <p class="movt">After -<span style="text-align: left;">2h 29min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i> 5/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all war">
                                <div class="item">
                                    <a href="assets/images/project-big-item-05.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="https://cdn.shopify.com/s/files/1/0969/9128/products/Midway_2019_-_Ed_Skrein_-_Hollywood_War_WW2_Movie_Poster_1b5a2ed8-4cd4-4b6b-8438-94e63cd268be.jpg" alt=""></a>
                                    <p class="movt">Midway <span style="text-align: left;">2h 29min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i> 5/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all love">
                                <div class="item">
                                    <a href="assets/images/project-big-item-06.jpg" data-lightbox="image-1" data-title="Our Projects"><img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/romance-movie-poster-design-template-a03a68814253fa73d721ea2015e16215_screen.jpg" alt=""></a>
                                    <p class="movt">A Woman in love -<span style="text-align: left;">2h 29min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i> 5/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->

    <!--Videos area---->
    <div class="videosc">
        <h2 style="text-align: center; text-transform: capitalize; font-weight: 900; color: #f1f1f1">New released</h2>
        <hr class="style14">

        <center>
            <iframe width="320" height="180" style="padding-right: 10px;" src="https://www.youtube.com/embed/blGnSGfLcyI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="320" height="180" style="padding-right: 10px; padding-left: 10px;" src="https://www.youtube.com/embed/i004l5TeToU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="320" height="180" style="padding-right: 10px; padding-left: 10px;" src="https://www.youtube.com/embed/Fp9pNPdNwjI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="320" height="180" style="padding-left: 10px;" src="https://www.youtube.com/embed/uR7AkPFBaEI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </center>

    </div>


    <!-- Videos Area---->

    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects" style="background-color: #121212;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3" style="border-right: #f80000 1px solid;">
                    <div class="section-heading">
                        <h3 style="padding-bottom: 8px; text-align: center; color: #f1f1f1">On Theater</h3>
                        <hr style="width: 50px;">
                        <form action="ticket1.php" method="post">
                            <h5 style="padding: 8px; padding-left: 10px; font-size: 18px; color: #f1f1f1">Select Movie
                            </h5>
                            <div class="select">
                                <select name="movie" id="slct" required>
                                    <option selected disabled>Select a Movie </option>
                                    <option value="Kaabil">Kaabil</option>
                                    <option value="Ae Kaash ke Hum">Ae Kaash ke Hum</option>
                                    <option value="Baahgi 3">Baahgi 3</option>
                                    <option value="Gunjan Saxena">Gunjan Saxena</option>
                                    <option value="Hawayein">Hawayein</option>
                                    <option value="Gazi Attack">Gazi Attack</option>
                                </select>
                            </div>
                            <h5 style="padding: 8px; padding-left: 10px; font-size: 18px; padding-top: 12px; color: #f1f1f1">
                                Select Time</i>
                            </h5>
                            <div class="select">
                                <select name="time" id="slct" required>
                                    <option selected disabled>Show Time</option>
                                    <option value="2:00pm">2:00pm</option>
                                    <option value="3:30pm">3:30pm</option>
                                    <option value="8:00pm">8:00pm</option>
                                    <option value="5:00pm">5:00pm</option>
                                    <option value="7:30pm">7:30pm</option>
                                    <option value="9:00pm">9:00pm</option>
                                </select>
                            </div>

                            <h5 style="padding: 8px; padding-left: 10px; font-size: 18px; padding-top: 12px; color: #f1f1f1">
                                Want Snacks?</i>
                            </h5>
                            <div class="select">
                                <select name="snacks" id="slct" required>
                                    <option selected disabled>Snacks List</option>
                                    <option value="McAloo Tikki Burger">McAloo Tikki Burger</option>
                                    <option value="McSpicy Chicken Burger + Coke">McSpicy Chicken Burger + Coke</option>
                                    <option value="2 McAloo Tikki + 2 Fries (L)">2 McAloo Tikki + 2 Fries (L)</option>
                                    <option value="1 Cappuccino + 1 Iced coffee @ 99 Each">1 Cappuccino + 1 Iced coffee
                                        @ 99 Each</option>
                                    <option value="New Vanilla Chocolate muffin">New Vanilla Chocolate muffin</option>
                                    <option value="Sharing Pack 2 McVeggie">Sharing Pack 2 McVeggie</option>
                                </select>
                            </div>

                            <h5 style="padding: 8px; padding-left: 10px; font-size: 18px; color: #f1f1f1">Select No of
                                tickets</h5>
                            <div class="select">
                                <input type="number" maxlength="2" min="1" max="10" style="padding-left: 20px; background-color: #b9141c; color: #fff; border: none;" name="num3" placeholder="Max 10" id="num3" required>

                            </div>
                            <br>
                            <p id="thProduct" style="color: #f80000; padding-left: 20px; font-size: 22px;"><i class="fa fa-inr" aria-hidden="true"></i> <span style="float: right;  font-size: 16px; padding-right: 50px;">@ 230/person</span></p>
                            <!-- begin snippet: js hide: false console: true babel: null -->

                            <!-- language: lang-js -->
                            <script>
                                function doMathh() {
                                    var numOne = document.getElementById('num3').value;
                                    var numTwo = document.getElementById('num4').value;
                                    var theProduct = parseInt(numOne) * parseInt(numTwo);
                                    var p = document.getElementById('thProduct');
                                    p.innerHTML += theProduct;
                                }
                            </script>
                            <br>
                            <div style="padding-left: 0px;">
                                <input class="bookbtn" id="num4" type="hidden" value="230" name="num4" required>
                                <input type="button" value="Clear Price" onClick="location.href=location.href" style="padding: 4px; border-radius: 25px; background-color: #f80000; color: #fff; border: none;">
                                <input type="reset" value="Reset" onClick="reload" style="padding: 4px; border-radius: 25px; background-color: #f80000; color: #fff; border: none;">
                                <input type="button" value="Calculate" onclick="doMathh()" style="padding: 4px; border-radius: 25px; background-color: #f80000; color: #fff; border: none;" />
                            </div>



                            <!-- end snippet -->
                            <br>
                            <div style="padding-left: 50px;">
                                <button type="submit" class="bookbtn" style="float: left; "> Book Now
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="filters">
                        <br>
                        <h3 style="padding-bottom: 8px; text-align: center; color: #f1f1f1">Filter</h3>
                        <hr style="width: 50px;">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".love">Romance</li>
                            <li data-filter=".war">War</li>
                            <li data-filter=".comd">Comady</li>
                            <li data-filter=".dra">Drama</li>
                            <li data-filter=".bio">Biopic</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h2 style="text-align: center; text-transform: capitalize; font-weight: 900; color: #f1f1f1">
                        bollywood movies</h2>
                    <div class="filters-content">
                        <div class="row grid">

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all love">
                                <div class="item">
                                    <a href="#" data-lightbox="image-1" data-title="Our Projects"><img src="https://m.media-amazon.com/images/M/MV5BNjY2MGQ0YmEtYmQ1Yi00NzdhLTlhMjgtNmJiZGQ0MDBhNjU5L2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNDkxMzY0Mjk@._V1_.jpg" alt=""></a>
                                    <p class="movt">Kaabil -<span style="text-align: left;">2h 15min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i> 3/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all love">
                                <div class="item">
                                    <a href="#" data-lightbox="image-1" data-title="Our Projects"><img src="https://filmfare.wwmindia.com/content/2019/dec/upcoming-bollywood-movies-2020-ae-kash-ke-hum-61577106195.jpg" alt=""></a>
                                    <p class="movt">Ae Kaash Ke Hum -<span style="text-align: left;">2h 42min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i> 4.2/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dra">
                                <div class="item">
                                    <a href="#" data-lightbox="image-1" data-title="Our Projects"><img src="https://m.media-amazon.com/images/M/MV5BZTAxNWE2MDItZWFlNS00MWM1LWI1ZjQtN2I5NDBhNWYzZjNhXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg" alt=""></a>
                                    <p class="movt">Baaghi 3 -<span style="text-align: left;">2h 29min</span><br>
                                        <span class="starr" style="padding-bottom: 4px;">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i> 3/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn" style="padding-bottom: 4px;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all comd">
                                <div class="item">
                                    <a href="#" data-lightbox="image-1" data-title="Our Projects"><img src="https://m.media-amazon.com/images/M/MV5BYjFhNzNjYTItYTNjOC00YWVmLWIwYTEtYjRiNWQyMzliMDFhXkEyXkFqcGdeQXVyNDA5NzAyMjQ@._V1_.jpg" alt=""></a>
                                    <p class="movt">Hawayein -<span style="text-align: left;">2h 15min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i> 3.4/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all war">
                                <div class="item">
                                    <a href="#" data-lightbox="image-1" data-title="Our Projects"><img src="https://m.media-amazon.com/images/M/MV5BZWJjM2U2ODUtNDZkZi00NjdhLWE0MzMtYzIyNzE0ZTcyNmJkL2ltYWdlXkEyXkFqcGdeQXVyNjQ2MjQ5NzM@._V1_.jpg" alt=""></a>
                                    <p>The Ghazi Attack -<span style="text-align: left;">2h 31min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i> 5/5
                                            Imdb
                                    </p>
                                    </span>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all bio">
                                <div class="item">
                                    <a href="#" data-lightbox="image-1" data-title="Our Projects"><img src="https://image.songsuno.com/movie-images/original/movie/gunjan-saxena---the-kargil-girl/gunjan-saxena---the-kargil-girl-poster-janhvi-kapoor-wallpaper.jpg" alt=""></a>
                                    <p class="movt">Gunjan Saxena - <span style="text-align: left;">2h 29min</span><br>
                                        <span class="starr">
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color: #ffd300;"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i> 3/5
                                            Imdb
                                    </p>
                                    </span>
                                    <br>
                                    <a href="#" class="playbtn"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                        Trailer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->

    <!--- Slider------------------------->
    <section class="section" id="projects" style="background-color: #121212; padding-left: 30px; padding-right: 30px">
        <div class="uk-margin"></div>
        <div class="uk-section">
            <hr class="style14">
            <h2 style="text-align: center; text-transform: capitalize; font-weight: 900; color: #f1f1f1">Top rated</h2>
            <div class="owl-carousel owl-theme owl-loaded owl-drag">

                <div class="owl-stage-outer">
                    <div class="owl-stage" style="width: 7344px; transform: translate3d(-1836px, 0px, 0px); transition: all 0.25s ease 0s;">
                        <div class="owl-item cloned" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://theglobalcoverage.com/wp-content/uploads/2020/06/market.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Lost In Space</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://media.vanityfair.com/photos/5edfc16ef7daa462039b1508/master/w_2734,h_1500,c_limit/TheAssistant-MCDASSI_EC027-BestMovies2020.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Lost In Space</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://www.fossmint.com/wp-content/uploads/2020/09/Best-Hollywood-Movies-2020.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Lost In Space</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://occ-0-2164-2186.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeBiTekl-zl6qhoqdQtM1SwZHmUNkFURQr5QpWR5qA1xn2Ke6CeUh89wheBZgwpHafuTYhLPmnfv-Yx4jmSzVSwKsX4.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Crimes</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://decider.com/wp-content/uploads/2020/05/C_105_Unit_00467R2.jpg?quality=80&strip=all);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Cursed</p>
                                    <p>2hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://www.whats-on-netflix.com/wp-content/uploads/2018/02/maxresdefault-7-1.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Lost In Space</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-action-movies-netflix-1588775389.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Lost In Space</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://icdn2.digitaltrends.com/image/digitaltrends/the-king-action-movies-netfllix-416x3467.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Lost In Space</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="owl-item" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://i.pinimg.com/originals/20/32/bb/2032bbe0294e6d76370e5c97ce1b1dd2.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Lost In Space</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://cdn.wallpapersafari.com/53/79/ajwtby.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Lost In Space</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://wallpaperaccess.com/full/624666.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Lost In Space</p>
                                    <p>1hr: 45mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 276px; margin-right: 30px;">
                            <div class="item">
                                <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-light" style=" background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .3)), url(https://wallpapershome.com/images/pages/ico_h/22381.jpg);   background-repeat: no-repeat;
                            background-size: cover;">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <p>Mulan</p>
                                    <p>2hr: 05mins</p>
                                    <br>
                                    <h3 style="font-size: 18px;"><a href="#" class="playbtn" style="border-radius: 12px; font-weight: 600; background-color: #121212; color:#f80000;"><i class="fa fa-play" aria-hidden="true"></i> Watch
                                            Trailer</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="subscribe" style="background-color: #121212;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>Subscribe Newsletters</h6>
                        <h2>Don’t miss this chance!</h2>
                    </div>
                    <div class="subscribe-content">
                        <p>Subscribe to our email service and stay updated about all the upcoming movie. We will even update our offers throught email.
                            So, don't miss this chance and subscribe now.
                        </p>
                        <div class="subscribe-form">
                            <form id="subscribe-now" action="" method="get">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="Enter your email..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Subscribe
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>Copyright &copy; 2021 UR.SHOW</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li>
                                <p>Follow Us</p>
                            </li>
                            <li><a rel="nofollow" href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a rel="nofollow" href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a rel="nofollow" href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a rel="nofollow" href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--popups--->

    


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

    <script>
        $(window).scroll(function() {

            if ($(this).scrollTop() > 0) {
                $('.nav2').fadeOut();
            } else {
                $('.nav2').fadeIn();
            }
        });
    </script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: false,
            stagePadding: 15,
            margin: 10,
            nav: true,
            navText: ['<span class="uk-margin-small-right uk-icon" uk-icon="icon: chevron-left"></span>',
                '<span class="uk-margin-small-left uk-icon" uk-icon="icon: chevron-right"></span>'
            ],
            responsive: {
                0: {
                    items: 1
                },
                640: {
                    items: 2
                },
                960: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        })
    </script>

</body>

</html>