<!DOCTYPE html>
<html>
<head>
	<title>Hilda's Homemade</title>
	<meta charset="utf-8">
	<meta name="description" content="Genuine Homemade Products">
	<meta name="keywords" content="Home Baking, Jam, Marmalade, Jelly, Gits, Homemade, Craft, Confectionary, Conserve.">
	<meta name="author" content="Daniel Gerber">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Open+Sans+Condensed:700" rel="stylesheet">
	<script type="text/javascript" src="hilda.js"></script>
	<script src="modernizr-custom.js"></script>
</head>
<body>
	<div>
		<?php require 'header.php';?>

		<div class="container-fluid " id="product-list">
			<div class="col-xs-12 col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 product-box" id="marmalades-button">
				<h3>Marmalades</h3>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 product-box"  id="jams-button">
				<h3>Jams</h3>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 product-box" id="jellies-button">
				<h3>Jellies</h3>
			</div> 
			<div class="col-xs-12 col-sm-2 col-md-2 product-box" id="chutneys-button">
				<h3>Chutney</h3>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 product-box" id="hampers-button">
				<h3>Hampers</h3>
			</div>
			<div class="col-xs-12 col-sm-2 col-md-2 product-box" id="other-products-button">
				<h3>More...</h3>
			</div>
		</div>
		<!--These are the buttons used to select each product-->
		<!--Marmalades-->
		<div class="container-fluid ">
		<div class="col-md-6 product-list-container">
			<div id="marmalades">	
			<h2>Marmalades</h2>
			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="marmalade-whiskey-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/marmalade_with_whiskey.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Marmalade<br> with<br> Whiskey</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="lemon-lime-gin-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/lemon_lime_gin_marmalade.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Lemon, Lime<br>& Gin<br>Marmalade</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="orange-marmalade-blackberry-brandy-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/orange_marmalade_blackberry_brandy.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Orange Marmalade with Wild Blackberry Brandy</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="lemon-spiced-wild-elderberry-vodka-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/lemon_spiced_wild_elderberry_vodka_marmalade.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Lemon & Spiced Wild Elderberry Vodka Marmalade</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="orange-wild-damson-vodka-marmalade-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/orange_wild_damson_vodka_marmalade.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Orange <br>& Wild Damson Vodka Marmalade</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="lemon-beechleaf-noyau-marmalade-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/lemon_beechleaf_noyau_marmalade.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Lemon & Beech Leaf Noyau Marmalade</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items"  id="orange-vanilla-marmalade-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/orange_vanilla_marmalade.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Orange<br>&<br>Vanilla Marmalade</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="lemon-lime-sloe-gin-marmalade-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/lemon_lime_wild_sloe_gin_marmalade.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Lemon & Lime<br>Wild Sloe Gin<br>Marmalade</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="orange-marmalade-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/orange_marmalade.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Orange<br> Marmalade</h5>
					</div>	
				</div>	
			</div>
		</div>


		<!--Jellies-->
		<div class="container-fluid ">
			<div id="jellies">
			<h2>Jellies</h2>
			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="gooseberry-vodka-jelly-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/gooseberry_vodka_jelly.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Gooseberry<br>&<br>Vodka Jelly</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="elderberry-port-jelly-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/elderberry_port_jelly.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Elderberry<br>&<br>Port Jelly</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="honeyberry-jelly-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/honeyberry_jelly.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Honeyberry Jelly</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="redcurrent-jelly-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/redcurrent_jelly.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Redcurrent Jelly</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="spiced-apple-jelly-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/spiced_apple_jelly.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Spiced Apple Jelly</h5>
					</div>	
				</div>	
			</div>
		</div>
		</div>
			<!--Jams-->
		<div class="container-fluid ">
			<div id="jams">
			<h2>Jams</h2>
			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="yellow-raspberry-conserve-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/yellow_raspberry_conserve.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Yellow<br>Raspberry<br>Conserve</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="mixed-berry-conserve-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/mixed_berry_conserve.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Mixed Berry<br>Conserve</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="strawberry-conserve-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/strawberry_conserve.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Strawberry Conserve</h5>
					</div>	
				</div>	
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="raspberry-conserve-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/raspberry_conserve.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Raspberry Conserve</h5>
					</div>	
				</div>	
			</div>
		</div>

		<!--Chutney-->
		<div class="container-fluid ">
			<div id="chutneys">
			<h2>Chutneys</h2>
			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="pear-toasted-walnut-chutney-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/pear_toasted_walnut_chutney.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Pear & Toasted<br>Walnut</h5>
					</div>	
				</div>	
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="lightly-spiced-banana-chutney-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/lightly_spiced_banana_chutney.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Lightly Spiced Banana Chutney</h5>
					</div>	
				</div>	
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="damson-chutney-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/damson_chutney.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Damson Chutney</h5>
					</div>	
				</div>	
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="aromatic-spiced-plum-chutney-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/aromatic_spiced_plum_chutney.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Aromatic Spiced Plum Chutney</h5>
					</div>	
				</div>	
			</div>
			<div class="col-xs-12 col-sm-6 col-md-6 product-items" id="spiced-apple-chutney-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/spiced_apple_chutney.jpg" width="60px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Spiced Apple Chutney</h5>
					</div>	
				</div>	
			</div>
		</div>
		</div>

		<!--Hampers-->
		<div class="container-fluid ">
			<div id="hampers">
			<h2>Hampers</h2>
			<div class="col-xs-12 col-sm-6 col-md-12 product-items" id="hampers-button">
				<div class="items-container">
					<div class="col-xs-6 col-sm-6 col-md-4 product-image">
						<img src="images/hampers_gift.jpg" width="120px" height="90px" style="border: solid 1px lightgrey;">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-8 product-heading">
						<h5>Custom Hampers<br> Subject To Availablity</h5>
					</div>	
				</div>	
			</div>		
			</div>
		</div>

	</div>
	</div>

	<div id="midbed"></div>
	<!--Refined Product Content, Large pictures contains all the information on product ingredients, price and size-->

	<!--Marmalade Refined-->
	<div class="container-fluid marmalade-refine-container">
		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-marmalade-whiskey">
			<div class="col-xs-12 ">
				<h2>Marmalade<br> with Whiskey</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/marmalade_whiskey_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Seville Oranges (27%), Water, Irish Whiskey (3.2%). </p>
			</div>
		</div> 

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-lemon-lime-gin-marmalade">
			<div class="col-xs-12 ">
				<h2>Lemon, Lime & Gin<br> Marmalade</h2>
			</div>
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<img src="images/lemon_lime_gin_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Lemons (25%), Sugar, Water, Pectin, Citric Acid, Lime (5%), Gin (2.3%). </p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-orange-marmalade-blackberry-brandy">
			<div class="col-xs-12 ">
				<h2>Orange Marmalade<br> with Blackberry Brandy</h2>
			</div>
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<img src="images/orange_marmalade_blackberry_brandy_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Seville Oranges (26%), Water, Wild Blackberry Brandy (3.2%). </p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-lemon-spiced-elderberry-vodka-marmalade">
			<div class="col-xs-12 ">
				<h2>Lemon & Spice Wild Elderberry Vodka Marmalade</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<img src="images/lemon_spiced_wild_elderberry_vodka.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Lemons(31%), Water, Spiced Wild Elderberry Vodka(3%), Pectin, Citric Acid. </p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-oranag-damson-vodka-marmalade">
			<div class="col-xs-12 ">
				<h2>Orange <br>& Wild Damson Vodka Marmalade</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/orange_damson_vodka_dark_marmalade.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Seville Oranges (26%), Water, Wild Damson Vodka (3.3%).</p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-lemon-beech-leaf-noyau-marmalade">
			<div class="col-xs-12 ">
				<h2>Lemon & Beech Leaf Noyau<br> Marmalade</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/lemon_beech_leaf_noyau_marmalade.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Lemons (26%), Water, Pectin, Citric Acid, Beech Leaf Noyau (3.3%). </p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-orange-vanilla-marmalade">
			<div class="col-xs-12 ">
				<h2>Orange and Vanilla<br> Marmalade</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/orange_and_vanilla_marmalade.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Seville Oranges (27%), Water, Vanilla Beans (0.13%). </p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-lemon-lime-sloe-gin-marmalade">
			<div class="col-xs-12 ">
				<h2>Lemon, Lime<br>Sloe Gin Marmalade</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/lemon_lime_sloe_gin_marmalade.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Ingredients: Sugar, Lemons (25%), Water, Pectin, Citric Acid, Lime (5%), Wild Sloe Gin (3%). </p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-orange-marmalade">
			<div class="col-xs-12 ">
				<h2>Orange<br>Marmalade</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/orange_marmalade_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Seville Oranges (27%), Water</p>
			</div>
		</div>
	</div>

	<!--Jellies Refined-->
	<div class="container-fluid refine-jelly-container">
		
		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-gooseberry-vodka-jelly">
			<div class="col-xs-12 ">
				<h2>Gooseberry & Vodka<br>Jelly</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/gooseberry_vodka_jelly_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Gooseberries (50%), Water, Vodka (2%), Lemon Juice</p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-elderberry-port-jelly">
			<div class="col-xs-12 ">
				<h2>Elderberry & Port<br>Jelly</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<img src="images/elderberry-port-jelly.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Wild Elderberries (25%), Apples, Water, Port (3%), Lemon Juice</p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-honeyberry-jelly">
			<div class="col-xs-12 ">
				<h2>Honeyberry<br>Jelly</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/honey_berry_jelly_bowl.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Water, Honeyberries, Apples</p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-redcurrent-jelly">
			<div class="col-xs-12 ">
				<h2>Redcurrent<br>Jelly</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/redcurrent_jelly_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Sugar, Redcurrants (50%), Water, Lemon</p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-spiced-apple-jelly">
			<div class="col-xs-12 ">
				<h2>Spiced Apple<br>Jelly</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/spiced_apple_jelly_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Apples (46%), Water, Sugar, Cinnamon Sticks, Whole Cloves, Star Anise, Lemon Juice</p>
			</div>
		</div>

	</div>

	<!--jams Refined-->
	<div class="container-fluid jams-refine-container">

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-yellow-raspberry-conserve">
			<div class="col-xs-12 ">
				<h2>Yellow Raspberry<br>Conserve</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/yellow_raspberry_conserve_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Yellow Raspberries (55%), Sugar, Grated Apple, Lemon Juice. </p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-mixed-berry-conserve">
			<div class="col-xs-12 ">
				<h2>Mixed Berry<br>Conserve</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/mixed_berry_conserve_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Mixed Berries(55%), Sugar, Grated Apple, Lemon Juice </p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-strawberry-conserve">
			<div class="col-xs-12 ">
				<h2>Strawberry<br>Conserve</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/strawberry_conserve_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Strawberries (53%), Sugar, Grated Apple, Lemon Juice. </p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-raspberry-conserve">
			<div class="col-xs-12 ">
				<h2>Raspberry<br>Conserve</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/raspberry_conserve_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Raspberries (55%), Sugar, Grated Apple, Lemon Juice. </p>
			</div>
		</div>

	</div>

	<!---Refine Chutneys-->
	<div class="container-fluid chutney-refine-container">

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-pear-toasted-walnut-chutney">
			<div class="col-xs-12 ">
				<h2>Pear & Toasted Walnut<br>Chutney</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/nuts_and_jam.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Pears (52%), Apples, Vinegar, Demerara Sugar, Lemon Juice, Raisins, Dates,</p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-lightly-spiced-banana-chutney">
			<div class="col-xs-12 ">
				<h2>Lightly Spiced Banana<br>Chutney</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<img src="images/lightly_spiced_banana_chutney_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Bananas (39%), Vinegar (Barley), Dates, Sultanas, Demerara Sugar, Fruit Syrup, Crystallised Ginger, Lemon Juice, Curry Powder (Mustard), Salt.</p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-damson-chutney">
			<div class="col-xs-12 ">
				<h2>Damson<br>Chutney</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<img src="images/damson_chutney_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Damsons (33%), Vinegar (BARLEY), Apples, Onions, Demerara Sugar, Balsamic Vinegar, Dates, Raisins, Ground Allspice, Ground Cloves, Sea Salt.</p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-aromatic-spiced-plum-chutney">
			<div class="col-xs-12 ">
				<h2>Aromatic Spiced Plum<br>Chutney</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/aromatic_plum_spiced_chutney_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Plums (34%), Cider Vinegar, Demerara Sugar, Onions, Raisins, Dates, Cumin, Paprika, Ground Ginger, Crushed Chillies, MUSTARD, Ground Cinnamon, Star Anise.</p>
			</div>
		</div>

		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-spiced-apple-chutney">
			<div class="col-xs-12 ">
				<h2>Spiced Apple<br>Chutney</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/spiced_apple_chutney_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12">
				<p>Sizes: (300g)</p>
				<p>Contains: Apples (40%), Cider Vinegar, Demerara Sugar, Onions, Ground Ginger, Turmeric, Ground Allspice, Ground Cloves, Sea Salt, Crushed Chillies</p>
			</div>
		</div>

	</div>

	<!--Refine Hampers-->
	<div class="container-fluid hampers-refine-container">
		<div class="refine-item col-xs-12 col-sm-12 col-md-6" id="refine-hampers">
			<div class="col-xs-12 ">
				<h2>Hampers</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/hamper_xmass.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12 ">
				<h2>Hilda's Homemades</h2>
			</div>
		</div> 
	</div>

	<!--select product indicator-->
	<div class="container-fluid select-product-indicator">
		<div class="refine-item col-xs-12 col-sm-12 col-md-6">
			<div class="col-xs-12 ">
				<h2><---- Select a product</h2>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
				<img src="images/all_products_dark.jpg" class="refine-item-img">
			</div>
			<div class="col-xs-12 ">
				<h2>Hilda's Homemades</h2>
			</div>
		</div> 
	</div>
	<div class="col-xs-12  product-box" id="bed" style="margin-top: 30px;">
		<h3>Other Products...</h3>
	</div>
	</div>
	<?php require 'footer.php';?>
</body>
</html>