<?php
include 'includes/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="./images/icon.ico">

        <title>Anilao Shark Bait Bar and Grill</title>

        <link href='http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps|Kaushan+Script|Nunito' rel='stylesheet' type='text/css'>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/normalize.css" rel="stylesheet">
        <link href="./css/myStyle.css" rel="stylesheet">
        <link href="./css/simpletextrotator.css" rel="stylesheet">
        <link href="./css/lightbox.css" rel="stylesheet">
        <link href="./css/component.css" rel="stylesheet">
    </head>

    <body>
        <div class="main clearfix" style="position: fixed; z-index: 999999999">

            <nav id="menu" class="nav">					
                <ul>
                    <li>
                        <a href="#home" class="scroll-link" data-id="home">
                            <span class="icon">
                                <i aria-hidden="true" class="glyphicon glyphicon-home"></i>
                            </span>
                            <span class="nav-title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#location" class="scroll-link" data-id="location">
                            <span class="icon"> 
                                <i aria-hidden="true" class="glyphicon glyphicon-map-marker"></i>
                            </span>
                            <span class="nav-title">Where</span>
                        </a>
                    </li>
                    <li>
                        <a href="#menuDiv" class="scroll-link" data-id="menuDiv">
                            <span class="icon">
                                <i aria-hidden="true" class="glyphicon glyphicon-cutlery"></i>
                            </span>
                            <span class="nav-title">Menu</span>
                        </a>
                    </li>
                    <li>
                        <a href="#gallery-page" class="scroll-link" data-id="gallery-page">
                            <span class="icon">
                                <i aria-hidden="true" class="glyphicon glyphicon-picture"></i>
                            </span>
                            <span class="nav-title">Gallery</span>
                        </a>
                    </li>
                    <li>
                        <a href="#story" class="scroll-link" data-id="story">
                            <span class="icon">
                                <i aria-hidden="true" class="glyphicon glyphicon-book"></i>
                            </span>
                            <span class="nav-title">Stories</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="parallax-container" data-parallax="scroll" data-position="middle" data-bleed="10" data-image-src="./images/mabina2.JPG" data-natural-width="1400" data-natural-height="800">
            <img src="./images/scuba.png" class="img-responsive center-block scuba">
            <img src="./images/banner2.png" class="img-responsive center-block banner">
        </div>          

        <div class="container active" id="home">

            <div class="row featurette">

                <div class="col-md-offset-1 col-md-4 about-caption">
                    <div class="featurette-heading about-title" style="border-bottom: 1px;">
                        <h2>on the shore of anilao bay</h2>
                    </div>
                    <div class="about-text">
                        <p>Anilao Shark Bait Bar and Grill is full of great food, great drinks, and a great experience.  Share stories with the local residents and other tourists.  Watch the beautiful Anilao sunset from our patio view.</p>
                        <p>At Anilao Bay, experiences are easy to come around.  Boat rentals are available from our loving neighbors and local residents bring a friendly an caring atmosphere.  Everyone across the world come here to scuba dive and boat. So why not have a meal or a drink afterwards and share your experience.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <img id="bar-image" class="img-responsive img-thumbnail" src="./images/bar2.PNG" />   
                    </div>

                </div>
            </div>

            <!--                       <hr class="featurette-divider">-->

            <!--            <div class="row featurette">
                                <span class="header-rotate">
                                    <center>
                                    <h3>
                                        <span class="rotate">
                                            " Have a tapsilog breakfast at the patio overlooking Anilao Bay "|
                                            " Have a wonderful time experiencing the world famous Anilao sunset, from our patio view "|
                                            " Truly a priceless moment "|
                                            " There is also karaoke available "
                                        </span>
                                    </h3>
                                    </center>
                                </span>
            
                            
                        </div>-->

            <!--                       <hr class="featurette-divider" style="padding-bottom: 5%;">-->

        </div>

        <div class="parallax-container" data-parallax="scroll" data-position="middle" data-bleed="10" data-image-src="./images/mabina.JPG" data-natural-width="1400" data-natural-height="800">

            <div class="row featurette">
                <div class="col-md-12" id="location">
                    <table>
                        <tr>
                            <td colspan="2"><h2>ANILAO PROPER, MABINI, BATANGAS, PHILIPPINES</h2></td>
                        </tr>
                        <tr>
                            <td>LANDMARK:</td> 
                            <td><h4>in front of Mabini Tourism</h4></td>
                        </tr>
                        <tr>
                            <td>HOURS:</td> 
                            <td><h4>7:00 a.m. to 2:00 a.m.</h4></td>
                        </tr>
                        <tr>
                            <td>CELL NO:</td> 
                            <td><h4>0920-2985811</h4></td>
                            </td>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">


            <div class="row featurette" id="menuDiv">
                <?php include_once 'includes/menu.php'; ?>
            </div>


        </div>
        <div class="container" style="margin-top: 50px; padding: 5%; background-color: #181818">

            <div class="row featurette" id="gallery-page">
                <?php include_once 'includes/gallery.php'; ?>
            </div>
        </div>
        <div class="container">

            <div class="row featurette" id="story">
                <?php include_once 'includes/stories.php'; ?>
            </div>


        </div>


        <footer>
            <div class="container">
                Anilao Shark Bait Bar and Grill | Website created by: Jason Roque
            </div>
        </footer>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="./js/myScripts.js"></script>
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./js/parallax.min.js"></script>
        <script type="text/javascript" src="./js/lightbox.min.js"</script>
        <script type="text/javascript" src="./js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="./js/skrollr.min.js"></script>
        <script type="text/javascript" src="./js/jquery.simple-text-rotator.min.js"></script>
        <script type="text/javascript" src="./js/modernizr.custom.js"></script>
        <script>
            $(function () {
                if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
                    $('#ios-notice').removeClass('hidden');
                    $('.parallax-container').height($(window).height() * 0.5 | 0);
                } else {
                    $(window).resize(function () {
                        var parallaxHeight = Math.max($(window).height() * 0.9, 200) | 0;
                        $('.parallax-container').height(parallaxHeight);
                    }).trigger('resize');
                }
            });

            if (!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)) {

                skrollr.init({
                    smoothScrolling: true,
                    mobileDeceleration: 0.0,
                });
            }


            $(".rotate").textrotator({
                animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
                separator: "|", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
                speed: 3000 // How many milliseconds until the next word show.
            });


        </script>
    </body>
</html>


