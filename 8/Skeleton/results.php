<!DOCTYPE html>
<html>

<head>
    <!-- This is a comment tag -->

    <!-- All meta data for SEO-->
    <meta charset="UTF-8"/>
    <meta name="author" content="Ashley Gainey">
    <meta name="description"
          content="Looking for the best kids products with a great price? Browse our amazing collection and get the perfect gift">
    <meta property="og:title" content="Gadget Gainey Store - Home of the best kids products!">
    <meta name="keywords" content="toys, kids, children, store, go kart, playsets, play, presents, fun, little kids, pedal, pedal go karts, pedal go kart,
		car, ride on, ride on bike, ride on cars, cars, bike, outdoor, racing">
    <link rel="icon" href="/Images/OnEveryPage/Gadget Gainey icon.png">
    <!--Carl, please look here too-->
    <!--TODO: Fix the php get request -->
    <Title>Results for <?php echo $_GET['searchTerm']; ?> - Gadget Gainey Store</Title>
    <link rel="stylesheet" href="siteLayout.css" type="text/css" media="screen,projection"/>
    <link rel="stylesheet" href="siteTheme.css" type="text/css" media="screen,projection"/>

    <!-- <base href="/images/" target = "_blank"> -->
    <style>
        /* This is an internal style sheet */
    </style>
    <script src="jquery-3.3.1.min.js"></script>
    <script src='Shop.js'></script>
    <script>

        var timer;

        // Your global variables should be declared below here -v


        // Your global variables should be declared above here -^
        // Any user defined functions should be declared below here -v


        // Any user defined functions should be declared above here -^

        $(document).ready(function () {

            // set a timed function call to wait for product xml to load
            timer = window.setInterval(function () {

                // Check if products have loaded
                if ($products === null) {
                    // They haven't loaded
                    return;
                } else {
                    // They have loaded

                    // Remove timer
                    window.clearInterval(timer);

                    // Populate the nav bar
                    populateNav("navmenu");

                    // Your $(document).ready() event script code goes below here -v


                    // Your $(document).ready() event script code goes above here -^
                }
            }, 100);

            // Your $(document).ready() event script code goes below here -v


            // Your $(document).ready() event script code goes above here -^
        });
    </script>
</head>

<body>
<div class="container">
    <div id="Header">
        <div class="Trust-Header">
            <div id="Trust-eBay">
                <a href="https://bit.ly/2to8o1z" target="_blank">
                    <h3> 98% OF CUSTOMERS LOVE US ON</h3>
                    <img src="Images/OnEveryPage/Trust Banner/eBay logo.png" alt="eBay">
                </a>
            </div>
            <div id="Trust-Fast_Delivery">
                <a href="delivery.html"> <img src="Images/OnEveryPage/Trust Banner/Next Day Delivery.png"
                                              alt="Next Day Delivery">
                    <h3> ORDER BY 3PM FOR NEXT DAY FREE DELIVERY</h3>
                </a>
            </div>
            <div id="Trust-Free_Delivery">
                <a href="Returns.html"> <img src="Images/OnEveryPage/Trust Banner/Returns.png"
                                              alt="Returns">
                    <h3>FREE 28 DAY RETURN ON EVERYTHING</h3>
                </a>
            </div>
        </div>
        <div class="line">
            <hr/>
        </div>
        <div id="Main-Header">
            <div id="Logo"><a href="index.html"> <img
                            src="Images/OnEveryPage/Main Banner/Gadget Gainey White Small Logo.png" alt="Logo"> </a>
            </div>

            <form method="get" action="results.html">

                <div class="fullSearchBox">
                    <input class="searchBox" type="search" name="searchTerm" autocomplete="off"
                           placeholder="Search Gadget Gainey..."/>
                    <button class="searchButton"><img
                                src="Images/OnEveryPage/Main Banner/Magnifier Glass - Search.png" alt="Search">
                        </img></button>
                </div>
            </form>


            <div class="RightButtons">
                <div id="Help"><a href="help.html"> <img src="Images/OnEveryPage/Main Banner/Help.png" alt="Help">
                        <h3>Help</h3>
                    </a>
                </div>
                <div id="Basket"><a href="PaymentTypes.html"> <img src="Images/OnEveryPage/Main Banner/Basket.png"
                                                                   alt="Basket">
                        <h3>Basket</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <ul class="navmenu">
    </ul>
    <div id=Outside_Body>
        Hello Outside
        <div id=Main_Body>
                <!--<h1>You searched for: <?php echo $_GET["searchTerm"]; ?></h1>-->

                <!--Carl, please look here-->
                <!--TODO: Fix the php get request -->
                <h1>You searched for:<i>
                        "<?php echo $_GET['searchTerm']; ?>"</i></h1>
                Hello Inside
        </div>
        Hello Outside
    </div>


    <footer>

        <div id="Footer-GadgetGainey" class="footerTextSection">
            <a href="index.html">
                <h1>Gadget Gainey</h1>
            </a>
            <a href="About.html" >
                <h4>About Us</h4>
            </a>
            <a href="Basket.html">
                <h4>Basket</h4>
            </a>
            <a href="https://bit.ly/2BLLE05" target="_blank">
                <h4>eBay Store</h4>
            </a>
            <a href="404Error.html">
                <h4>Sitemap</h4>
            </a>
        </div>
        <div id="Footer-TheBoringStuff" class="footerTextSection">
            <h2>The Boring Stuff</h2>
            <a href="Delivery.html">
                <h4>Shipping & Delivery</h4>
            </a>
            <a href="Returns.html">
                <h4>Returns & Refunds</h4>
            </a>
            <a href="Terms&Conditions.html">
                <h4>Terms & Conditions</h4>
            </a>
        </div>
        <div id="Footer-Support" class="footerTextSection">
            <h2>Support</h2>
            <a href="Contact.html">
                <h4>Contact Us</h4>
            </a>
            <a href="FAQ.html">
                <h4>FAQ's</h4>
            </a>
        </div>
        <div id="Footer-Supported_Payments" class="footerTextSection">
            <h2>Supported Payments </h2>
            <img src="Images/OnEveryPage/Payment Types.png">
        </div>
        <div id="Footer-Find-eBay">
            <h2>Find us on</h2>
            <a href="https://bit.ly/2BLLE05" target="_blank">
                <img src="Images/OnEveryPage/Trust Banner/eBay logo.png">
            </a>
        </div>
        <div id="Footer-copyright" class="footerTextSection">
            <h5>
                © Gadget Gainey 2019. All Rights Reserved
            </h5>
        </div>
    </footer>
</div>
</body>
</html>