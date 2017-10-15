
<!-- Php code... Connects with the server -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>

	<title> Contact</title>
	
	<!-- External stylesheet -->
	<link type="text/css" rel="stylesheet" href="http://students.washington.edu/yusufh/student_html/tinfo230/assign4/css/css.css">
</head>

<body class="positionContainer">

	<!-- the main container - in the middle -->
	<div id="container">
	
		<!-- Header on the top of the container -->
		<header> 
			<h1>Welcome To Ethiopia<br /> <i>Addis Ababa</i></h1>
		</header>
		
		<!--side bar- left side of the page -->
		<div id="sidebar">
		
			<!-- contents located in sidebar -->
			<div id="sidebarContent">
				<aside>
					
					<p><b>Elevation:</b><br> 7,726′ <br><br>
					<b>Area:</b> <br>203.5 mi² <br><br>
					<b>Population:</b><br> 3.385 million <br> <br>
					<b>Weather: </b><br>52°F (11°C)<br><br>
					<b> Local time:</b><br> <p id="demo"></p><br><br>
					</p>
					
			
					
					<h3>Social Media</h3>
					
					<p>like us on <a href="https://www.facebook.com" target="blank"> Facebook</a></p>
					<p>Follow us on <a href="https://twitter.com" target="blank">Twitter</a></p>					
				</aside>
			<!-- end sidebarContent -->
			</div>	
		<!-- end sidebar -->
		</div>
			
		<!--main text area -->		
		<div id="main">
		
			<!--navigation bar -->
			<nav>
				<ul>
					<li><a href="http://students.washington.edu/yusufh/student_html/tinfo230/assign4/about/home.html" >Home</a></li>
					<li><a href="http://students.washington.edu/yusufh/student_html/tinfo230/assign4/about/about.html" >About </a></li>
					
					<!--dropdown bar -->
					<li class="dropdown">
						<a class="dropbtn">Travel</a>
						<div class="dropdown-content">
							<a href="http://students.washington.edu/yusufh/student_html/tinfo230/assign4/travel/guide.html" >Travel Guide</a>
							<a href="http://students.washington.edu/yusufh/student_html/tinfo230/assign4/travel/todo.html" >Things to do</a>
						</div>
					</li>
					
					<li><a href="http://students.washington.edu/yusufh/student_html/tinfo230/assign4/contact/contact.html" >Contact</a></li>
				</ul>
			</nav>
			
			<section>
				<!--sub title -->
				<h2>Ask us anything about Addis Ababa. We are here to help you!</h2><br>
				<p>
				Thanks <?php echo $_POST["name"]; ?>, for contacting us. Someone will response to you soon! <br><br>
				Confirm your contact info: <br><br>
				Your email address is: <?php echo $_POST["email"]; ?><br>
				Phone number: <?php echo $_POST["number"]; ?>
				</p>
				
			</section>
			
		<!-- end of main -->
		</div>

		<!--extra spaces -->
		<br class="clearfloat" />
		
		<!--footer -->
		<footer>
			<div id="footer">
				&copy; Yusuf Hamid 2017. All rights reserved
			</div>	
		</footer>
	<!-- end of container -->	
	</div>	
<!-- end of body -->	
</body>

<script>
var n = localStorage.getItem('on_load_counter');
 
if (n === null) {
    n = 0;
}
 
n++;
 
localStorage.setItem("on_load_counter", n);
 
document.getElementById('counter').innerHTML = n;

/*local time */
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}

</script>
</html>