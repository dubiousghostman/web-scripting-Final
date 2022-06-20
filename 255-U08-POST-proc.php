<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Ramen Shop: Menu</title>
	
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </script>
</head>
<style>
html {
	background-image: url("https://cdn.vox-cdn.com/uploads/chorus_asset/file/6539093/2016-05-19-1212-005.0.jpg");
	background-size:cover;
	background-repeat:no-repeat;	
}
body  {
	font-family: 'Adobe Garamond Pro', Verdana, Arial, Helvetica, sans-serif, 'Times New Roman', 'EB Garamond', 'Hiragino Mincho Pro', 'ＭＳ ゴシック', 'MS Gothic', monospace;
	max-width: 960px;
	width: 95%;                        /* fixed width was 800 */
	background-color: white;
	margin: 0 auto; 
	padding: 0;
	border: 3px solid black;
	box-shadow: 0 9px 18px 9px;
}

a {
    color: black;
    text-decoration: none;
}
h1 {
    font-size: 2.8rem;
	margin: 0;
	padding: 0;
}
h2 {
    margin-top: 1em;
	padding: 0;
}
h3 {
	font-weight: lighter;
}
/* Header */
header {
	grid-area: head;
	padding: 50px;
	margin-bottom: -20px;
	background-repeat:no-repeat;
	border-top: 2px solid black;
} 
header img { 
	float: left; 
	padding-right: 1.875%;               /* 15 / 800 x 100 */  
	width: 10.6%;
	max-width: 85px;
	min-width: 40px;
} 
header h2 {
	font-size: 230%;
}
header h3 {
	font-size: 125%;
	padding-bottom: .75em;             /* 15 / (1.25 x 16) */
}
/* Nav */
nav {
	grid-area: navi;
	align-self: center;
}
nav ul {
	background-image: url(images/papertex.jpg);
	list-style-type: none;
	font-size: 150%;
	margin: 0;
	padding: 0;
	margin-top: 20px;
	display: grid;
	height: 100px;
	grid-template: auto / repeat(4, 1fr);
	grid-gap: 20px;
	justify-items: center;
	align-content: center;
}	

nav ul a:hover {
	opacity: 30%;
	display: grid;
	transition: .5s ease;
} 
nav ul li a.current:hover {
	opacity: 30%;
	display: grid;
	transition: .5s ease;	
}	 
nav ul li a.current {
	color: orange;
}
/* Section */
section {
	width: 72.5%;                       /* 580 / 800 x 100 */
	padding: 1.25em 5% 1.25em 2.5%;     /* top and bottom: 20 / 16; right: 40 / 800 x 100; left: 20 / 800 x 100 */
	float: right;
}
section h1 { 
	font-size: 140%;
	margin-bottom: .5em;
}
section h1:first-letter { 
	font-size: 240%;
}
section h2 {
	font-size: 125%;
	margin: .8em 0 .5em 0;
}
section h3 {
	font-size: 110%;
	margin: .8em 0 .5em 0;
}
section p {
	margin-bottom: .5em;
}
section a {
	font-weight: bold;
	color: orange;
}
section a:link, main a:visited { 
    color: orange; 
}
section a:hover, main a:focus { 
    color: green;
}
section img {
	width: 30%;
	max-width: 150px;
}

/* Footer */
footer { 
	clear: both;
	border-top: 2px solid black;
	padding: .9375em 1.875%;       /* top and bottom: 15 / 16; right and left: 15 / 800 x 100 */
    background-image: -webkit-linear-gradient(45deg, black 0%, orange 25%, white 100%);
    background-image: -moz-linear-gradient(45deg, black 0%, orange 25%, white 100%);
    background-image: -o-linear-gradient(45deg, black 0%, orange 25%, white 100%);
    background-image: linear-gradient(45deg, black 0%, orange 25%, white 100%);
	background: #fefefe;
	font-weight: lighter;
	grid-area: foot;
	text-align: center;
} 
footer p {
	font-size: 90%;
	text-align: center;
}
		body {
		scroll-behavior: smooth;
            margin: 0;
			background-color: #e0d1b2;
            font-family: sans-serif;
			display: grid;
			width: 1000px;
			grid-gap: 20px;
			margin: 20px auto;
			grid-template-columns: repeat(4, 1fr);
			grid-template-rows: 80px 400px 420px 100px 10px 200px 200px 50px;
			grid-template-areas:
				"navi navi navi navi"
				"head head head head"
				"head head head head"
				"titl titl titl titl"
				"tit2 tit2 tit2 tit2"
				"blo1 blo1 blo4 blo4"
				"blo2 blo2 blo3 blo3"
				"foot foot foot foot";            
        }
		header {
			background-image: url("https://i.redd.it/rbuithjacvg11.jpg");
		}
		h4 {
			color: black;
		}
		h5 {
			color: black;
			}

		nav ul {
		}
		#mainelement {
			background: white;
			opacity: 70%;
			box-shadow: 3px 3px 6px 6px black;
			transition: .5s ease;
		}
		#mainelement:hover {
			background: white;
			opacity: 90%;
			box-shadow: 3px 3px 6px 6px black;
			transition: .5s ease;
		}
		#blog1 {
			grid-area: blo1;
			text-align: center;	
			font-size: 150%;
		}
		#blog2 {
			grid-area: blo2;
			text-align: center;	
			font-size: 150%;
		}
		#blog3 {
			grid-area: blo3;
			text-align: center;	
			font-size: 150%;
		}
		#blog4 {
			grid-area: blo4;
			text-align: center;	
			font-size: 150%;
		}
		#product1 {
			border-top: 2px solid black;
			grid-area: titl;
			background-image: url(images/papertex.jpg);
			background-color: silver;
			text-align: center;
			height: 42px;
			width: 92.5%;
		}

.container1 {
  position: relative;
  margin-left: 3%;
  width: 75%;
  
}
.container2 {
  position: relative;
  margin-right: 3%;
  width: 75%;
  left: 14%;
}
.image {
  width: 100%;
  height: 100%;
}
.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: silver;
}
.container1:hover .overlay {
  opacity: 50%;
}
.container2:hover .overlay {
	opacity: 50%;
}
.text {
  color: white;
  opacity: 200%;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.demopara {
  line-height: 1.5 ;
} 

</style>

<body>
	
	<!--These hrefs are for the banner navigation buttons-->
	<nav>
    	<ul>
        	<li><a href="index.html">Home</a></li>
        	<li><a href="menu.html" class="current">Menu</a></li>
        	<li><a href="locations.html">Locations</a></li>
        	<li><a href="contact.html">Contact Us</a></li>
        </ul>
		</nav>
    <header>
  
      <!-- This is the main element which contains the receipt print out -->
		<section id="mainelement">
      <h1 class="demopara"> Your Order Receipt </h1>
<form method="post" action="255-U08-POST-proc.php">

    <br>
    <br>





<?php

# These are the $_REQUEST functions which use if / else statements to process the orders and display them
if(isset($_REQUEST['ShoyuRamen_name'])) {$ShoyuRamen_name = $_REQUEST['ShoyuRamen_name']; }
else {$ShoyuRamen_name="";}
$ShoyuRamenQuantity=$_REQUEST['ShoyuRamenQuantity'];

if(isset($_REQUEST['MisoRamen_name'])) {$MisoRamen_name = $_REQUEST['MisoRamen_name']; }
else {$MisoRamen_name ="";}
$MisoRamenQuantity=$_REQUEST['MisoRamenQuantity'];

if(isset($_REQUEST['TonkotsuRamen_name'])) {$TonkotsuRamen_name = $_REQUEST['TonkotsuRamen_name']; }
else {$TonkotsuRamen_name ="";}
$TonkotsuRamenQuantity=$_REQUEST['TonkotsuRamenQuantity'];

if(isset($_REQUEST['ShioRamen_name'])) {$ShioRamen_name = $_REQUEST['ShioRamen_name']; }
else {$ShioRamen_name ="";}
$ShioRamenQuantity=$_REQUEST['ShioRamenQuantity'];

if(isset($_REQUEST['WakayamaRamen_name'])) {$WakayamaRamen_name = $_REQUEST['WakayamaRamen_name']; }
else {$WakayamaRamen_name ="";}
$WakayamaRamenQuantity=$_REQUEST['WakayamaRamenQuantity'];


# Set intial names
$ShoyuRamenTotal=0;
$MisoRamenTotal=0;
$TonkotsuRamenTotal=0;
$ShioRamenTotal=0;
$WakayamaRamenTotal=0;

# Print order
print "Order Details <br>";


if ($ShoyuRamen_name == "ShoyuRamen_checked")
    print "Shoyu Ramen X $ShoyuRamenQuantity <br>";


if ($MisoRamen_name == "MisoRamen_checked")
    print "Miso Ramen X $MisoRamenQuantity <br>";


if ($TonkotsuRamen_name == "TonkotsuRamen_checked")
    print "Tonkotsu Ramen X $TonkotsuRamenQuantity <br>";


if ($ShioRamen_name == "ShioRamen_checked")
    print "Shio Ramen X $ShioRamenQuantity <br>";


if ($WakayamaRamen_name == "WakayamaRamen_checked")
    print "Wakayama Ramen X $WakayamaRamenQuantity <br>";

# Calculate order
if ($ShoyuRamen_name == "ShoyuRamen_checked")
    $ShoyuRamenTotal= ($ShoyuRamenQuantity * 15);


if ($MisoRamen_name == "MisoRamen_checked")
    $MisoRamenTotal= ($MisoRamenQuantity * 15);


if ($TonkotsuRamen_name == "TonkotsuRamen_checked")
    $TonkotsuRamenTotal= ($TonkotsuRamenQuantity * 15);


if ($ShioRamen_name == "ShioRamen_checked")
    $ShioRamenTotal= ($ShioRamenQuantity * 15);


if ($WakayamaRamen_name == "WakayamaRamen_checked")
    $WakayamaRamenTotal= ($WakayamaRamenQuantity * 15);

# Calculate total
$total_cost= ($ShoyuRamenTotal + $MisoRamenTotal + $TonkotsuRamenTotal + $ShioRamenTotal + $WakayamaRamenTotal);

# Print total
Print "<br>Order Total: $$total_cost";

?>


</section></body>

	

    </header>

 <!-- This section shows is the four picture-buttons that can be hoevered over at the bottom of the page, and can also be clicked on to take you to the menu -->
	<section id="product2"></section>
    <section  id="blog1" class="container1" style="border: 1px solid black; 
	background-image: url(https://somifoods.com/wp-content/uploads/2018/08/shoyu-ramen.jpg); background-size:cover;">
		<div class="overlay">
		<div class="text"><h5>Served in a soup base with chicken broth flavored with soy sauce</h5></div><h4>Shoyu Ramen</h4></div></a></section>
	
    <section  id="blog2" class="container1" style="border: 1px solid black; 
	background-image: url(https://s3.envato.com/files/257892326/_00A3782.jpg); background-size:cover;">
	<div class="overlay">
		<div class="text"><h5>Served in golden pork broth</h5></div> 
		<h4>Tonkotsu Ramen</h4></div></a></section>
	
    <section id="blog3" class="container2" style="border: 1px solid black; 
	background-image: url(https://mitchiesdelivery.com/upload/1611706558-Cover1.jpg); background-size:cover;">
	<div class="overlay">
		<div class="text"><h5>Tokyo-style tonkotsu served in pork bone broth and flavored with soy sauce</h5></div> 
		<h4>Wakayama Ramen</h4></div></a></section>
		
		<section id="blog4" class="container2" style="border: 1px solid black; 
	background-image: url(https://vignette.wikia.nocookie.net/ramen/images/2/28/Shioram.jpg/revision/latest?cb=20150514235907); background-size:cover;">
	<div class="overlay">
		<div class="text"><h5>Rich ramen seasoned with sea salt</h5></div> 
		<h4>Shio Ramen</h4></div></a></section>




	<section id="middlebreak"></section>
	
    <footer>
        <p>&copy; 2020-2021 Mackenzie King</p>
    </footer>
	
</body>
</html>
