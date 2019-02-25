<head>
	<!-- This is a comment tag -->

	<!-- All meta data for SEO-->
	<meta charset="UTF-8" />
	<meta name="author" content="Ashley Gainey">
	<meta name="description" content="Looking for the best kids products with a great price? Browse our amazing collection and get the perfect gift">
	<meta property="og:title" content="Gadget Gainey Store - Home of the best kids products!">
	<meta name="keywords" content="toys, kids, children, store, go kart, playsets, play, presents, fun, little kids, pedal, pedal go karts, pedal go kart, 
		car, ride on, ride on bike, ride on cars, cars, bike, outdoor, racing">
	<link rel="icon" href="/Images/OnEveryPage/Gadget Gainey icon.png">
	<Title>Results for <?php echo $_GET['searchTerm']; ?> - Gadget Gainey Store</Title>
	<link rel="stylesheet" href="siteLayout.css" type="text/css" media="screen,projection" />
	<link rel="stylesheet" href="siteTheme.css" type="text/css" media="screen,projection" />

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
				}
				else {
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
		<div id="Top-Header">
			<div class="Trust-Header">
				<div id="Trust-eBay">
					<a href="https://bit.ly/2to8o1z" target="_self">
						<h3> 98% OF CUSTOMERS LOVE US ON</h3>
						<img src="Images/OnEveryPage/Trust Banner/eBay logo.png" alt="eBay">
					</a>
				</div>
				<div id="Trust-Fast_Delivery">
					<a href="delivery.html"> <img src="Images/OnEveryPage/Trust Banner/Next Day Delivery.png" alt="Next Day Delivery">
						<h3> ORDER BY 3PM FOR NEXT DAY DELIVERY</h3>
					</a>
				</div>
				<div id="Trust-Free_Delivery">
					<a href="delivery.html"> <img src="Images/OnEveryPage/Trust Banner/Free Delivery.png" alt="Free Delivery">
						<h3>FREE DELIVERY ORDERS OVER £100<h3>
				</div></a>
			</div>
			<div class="hr">
				<hr />
			</div>
			<div id="Main-Header">
				<div id="Logo"><a href="index.html"> <img src="Images/OnEveryPage/Main Banner/Gadget Gainey White Small Logo.png"
						 alt="Logo"> </a>
				</div>

					<form method="get" action="results.html">

				<div class="search-box">
					<input type="search" class="search-box-input" name="searchTerm" autocomplete="off" placeholder="Search Gadget Gainey..." />
					<button class="search-box-button"> <img src="Images/OnEveryPage/Main Banner/Maginifer Glass - Search.png" alt="Search">
						</img></button>
				</div>
				</form>



				<div class="RightButtons">
					<div id="Help"> <a href="help.html"> <img src="Images/OnEveryPage/Main Banner/Help.png" alt="Help">
							<h3>Help</h3>
						</a>
					</div>
					<div id="Basket"><a href="Basket.html"> <img src="Images/OnEveryPage/Main Banner/Basket.png" alt="Basket">
							<h3>Basket</h3>
						</a>
					</div>
			</div>
		</div>
	</div>
	<ul class="navmenu">
	</ul>


		<div id=Main_Body>
			<div id=Main_container>
                
                    <h1>You searched for:<i> 
                        <?php echo $_GET['searchTerm']; ?></i></h1></div>

                
                </div>
	</div>



	</div>







</body>