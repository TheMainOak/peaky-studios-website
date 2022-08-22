<!DOCTYPE html>
<html lang="en">
<head>
  <title>Peaky Studios - Order</title>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible">

                        <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="Styles/Stylesheet_AboutUs.css">

                        <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                        <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

                        <!-- jQuery -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>


</head>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="Index.html" class="nav-logo"><img src="Components/PS_Logo.jpg" alt="Peaky Studios" height="90px" width="130px"></a>

    <!-- Right-sided navbar links -->
    <div class="nav navbar-container nav-right w3-hide-small">
      <ul>
        <li class="navbar-item nav-link "><a href="Home.html" id="Home"class="">Home</a><div class="underline"></div></li>
        <li class="navbar-item nav-link active-link"><a href="Packages.html" id="Pricing" class="nav-link">Pricing</a><div class="underline"></div></li>
        <li class="navbar-item nav-link "><a href="FAQ.html" id="FAQ" class="nav-link">FAQ</a><div class="underline"></div></li>
        <li class="navbar-item nav-link "><a href="AboutUs.html" id="AboutUs" class="nav-link">About Us</a><div class="underline"></div></li>
      </ul>
    </div>

    <!-- Hide right-floated links on small screens and replace them with a menu icon -->
    <a href="javascript:void(0)" class="nav-HB w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<div class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none;" id="mySidebar">
  <div class="sidebar-arrow"><a href="javascript:void(0)" onclick="w3_close()" class="nav-item w3-button w3-large w3-padding-16 "><i class="fas fa fa-angle-left"></i></a></div>
  <a href="Home.html" onclick="w3_close()" class="nav-item w3-button">Home</a>
  <a href="#Pricing" onclick="w3_close()" class="nav-item w3-button">Pricing</a>
  <a href="#FAQ" onclick="w3_close()" class="nav-item w3-button">FAQ</a>
  <a href="#AboutUs" onclick="w3_close()" class="nav-item w3-button">About Us</a>
</div>

<div>
	<p>SEND EMAIL</p>
	<form class="contact-form" action="contactform.php" method="post">
		<input type="text" name="name" placeholder="Full Name">
		<input type="text" name="mail" placeholder="Your E-Mail">
		<input type="text" name="subject" placeholder="Subject">
		<textarea name="message" placeholder="Message"></textarea>
		<button type="submit" name="submit">SEND MAIL</button>
	</form>
</div>
</body>
<footer>
         <!-- Scripts -->
  <script src="JS/Layout/HB_Menu.js"></script>
  <script src="JS/Layout/NavBar.js"></script>
</footer>
</html>

