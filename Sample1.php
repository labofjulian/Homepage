
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Atomic Flounder</title>
  

  <!-- Bootstrap 3.3.6 core CSS (Bootswatch Paper theme) -->
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/paper/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->

  <!-- Custom CSS -->

  <!-- Font Awesome 4.5.0 -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

 

</head>
<style>
/* Sitewide styles */
body {
  padding-top: 64px;
  font-size: 18px;
  line-height: 1.5;
}
section {
  padding-bottom: 60px;
}
footer {
  margin: 2em 0;
}
footer p {
  font-size: 14px;
}
footer li {
  float: right;
  margin-right: 1.5em;
  margin-bottom: 1.5em;
}
.lead {
  font-size: 24px;
}
#navbar {
  Background-color: #000000;
  font-size: 14px;
}
.vertical-align {
    display: flex;
    align-items: center;
}
.cushion-top {
  padding-top: 45px;
}
.cushion-bottom {
  padding-bottom: 50px;
}
.horizontal-icons li {
  display: inline;
  margin-right: 10px;
}
/* Home page cover */
.bg-img {
  width: 100%;
  height: 100%;
  background: url('background.jpg') center center no-repeat;
  background-size: cover; 
  height: 100vh;
  opacity: 20%;
-webkit-animation-name: example;
	-webkit-animation-duration: 28s;
	animation-name: example;
	animation-duration: 28s;
	animation-iteration-count: infinite;
}
@keyframes example {
	0% {background-image: url("background.jpg");}
	20% {background-image: url("show.jpg");}
	40% {background-image: url("pic.jpg");}
	50% {background-image: url("background.jpg");}
	65% {background-image: url("show.jpg");}
	75% {background-image: url("background.jpg");}	
	100% {background-image: url("background.jpg");}
    }
.jumbotron-wrapper {
  position: relative;
  margin: 0 auto;
  color: white;
  text-align: center;
  overflow: hidden;
  max-width: 2560px;
  z-index: 0;
}
.jumbotron h1, .jumbotron .h1 {
  color: #fff;
  font-weight: bold;
}
.drop-shadow {
  text-shadow: 2px 2px 2px #000;
}
.image-shadow {
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}

/* CodeAcross landing page */
.banner {
  width: 100%;
  padding-bottom: 30px;
}
.codeacross p, .codeacross .p {
  font-size: 22px;
}
.heart {
  color: red;
}
.cushion {
  padding: 15px;
}
.lower {
  margin-top: 20px;
}

/* Projects */
.contributors img {
  width: 50px;
}
.contributor-owner img {
  border: 1px solid darkgray;
}
.issues {
  list-style-type: none;
  padding: 0 10px;
}
.issues li a {
  text-decoration: none;
}
.issue {
  text-align: center;
  border: 1px solid #e5e5e5;
  border-radius: .33em;
  margin-bottom: 10px;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}
.issue:hover {
  border: 1px solid #9c9c9c;
}
.issue-label {
  display: inline-block;
  color: #444444;
  text-align: center;
  border-radius: .33em;
  margin: 5px;
  padding: 0 10px;
  font-size: 0.85em;
}

.form-control {
  color: #fff;
  text-shadow: 2px 2px 2px #000;
}
label.error {
  text-align: left;
}

#main-description, #io-cupid {
  background-color: #fafafa;
  padding-top: 45px;
}

.jumbotron {
  margin-bottom: 0px;
}

/* job section styles */
section#job {
  padding-bottom: 5px
}

.donate-btn {
    margin-top: -7px;
}

.bigdog-img {
    width: 100%;
    height: 600px;
    background: url('/images/bigdog-2017-fb.jpg') center center no-repeat;
    background-size: cover;
}
</style>

  <body style="background-color: #000000;">

  <header class="site-header">

    <!-- Fixed navbar -->
    <div class="w3-top">
  <div class="w3-bar w3-black w3-text-red w3-wide w3-padding w3-card-2 navbar-inverse navbar-fixed-top" id="myNavbar" style="opacity: 0.6;">
  <div class="w3-hide-small">
    <a href="#home" class="w3-bar-item w3-button w3-hover-red" "><b>Atomic Flounder</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small"><!--
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>-->
      <a href="#about" class="w3-bar-item w3-button w3-text-red w3-hover-red">About us:</a>
	  <a href="#contact" class="w3-bar-item w3-button w3-text-red w3-hover-red">Contact us:</a>
    </div>
  </div>
  </div>
</div>
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-red w3-card-2 w3-animate-left w3-top w3-hide-medium w3-hide-large" style="opacity: 0.6; display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close &times;</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">EVENTS</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">MEMBERS</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>
  </header>


    <div class="jumbotron bg-img" id="home">
  <div class="jumbotron-wrapper">
    <div class="container">
      <img src="flounder.png" height="168" width="auto" />
	  <div class="row">
   
  </div>
</form>

      <h1 class="drop-shadow" style="color: #D30A00;">Atomic Flounder</h1>
      <p class="drop-shadow" style="color: #D30A00;"> Yuba City, CA </p>

      <form id="mc-form" class="form-group" autocomplete="off">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-2">
      <input id="mc-email" class="form-control input-lg" type="email" id="inputLarge" placeholder="Email Address">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: #D30A00; color: #000000;"><i class="fa fa-envelope-o" style="color: #000000;"></i> Subcribe</button>
    </div>
  </div>
  
    </div>
  </div>
</div>
<br>

  <div class="w3-container w3-center w3-padding-32" id="about">
   <div class="w3-content w3-justify w3-padding-64" id="about"><div class="w3-container w3-black">
<img src="logo.png" alt="Logo" class="w3-image " width="180" height="180">   
    <h2 class="w3-container " style=" color: #D30A00;">Atomic Flounder</h2>
    <hr style="width:200px" class="w3-opacity">
    <p class="w3-container " style=" color: #D30A00;">     Hello,  we are Atomic Flounder! (I'll let you guys write a really nice description of who you are and your bands story etc. then I'll upload it here)  
	</div>
    </p></div>
  </div>
  <div class="w3-container w3-center w3-padding-32" id="members">
 <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="don.jpg"  style="height: 80%; width:100%">
      <h3>Don Turner (Delphino)</h3>
      <p class="w3-opacity">Bass/Vocals</p>
      <p></p>
      <p><button class="w3-button w3-block" style="background-color: #D30A00;">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="jackie.jpg"  style="height: 80%; width:100%">
      <h3>Jacob Madden (Doughboy)</h3>
      <p class="w3-opacity">Guitar</p>
      <p></p>
      <p><button class="w3-button w3-block" style="background-color: #D30A00;">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="nathan.jpg"  style="height: 80%; width:100%">
      <h3>Nathan Young (Fatback)</h3>
      <p class="w3-opacity">Guitar</p>
      <p></p>
      <p><button class="w3-button  w3-block" style="background-color: #D30A00;">Contact</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="barney.png"  style="height: 80%; width:100%">
      <h3>Tristan Barnhart (Barney)</h3>
      <p class="w3-opacity">drums</p>
      <p></p>
      <p><button class="w3-button  w3-block" style="background-color: #D30A00;">Contact</button></p>
    </div>
  </div>
</div>
      <hr>
<!--<div class="col-sm-12 text-center">-->
    <!--a href="https://www.bigdayofgiving.org/codeforsacramento"-->
      <!--img class="img-responsive center-block" src="/images/bigdog-2017-fb.jpg"-->
    <!--/a-->
<!--</div>-->
<!--<div class="jumbotron bigdog-img">-->
  <div class="w3-padding-64 w3-content " id="contact">
    <h2 class="w3-text" style="color: #D30A00;">Contact Us</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p style="color: #D30A00;"><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right" style="color: #D30A00;"></i> Yuba City, CA</p>

      <p style="color: #D30A00;"><i class="fa fa-envelope fa-fw  w3-xxlarge w3-margin-right"> </i> Email: ??????@???</p>
    </div><br>
    <p style="color: #D30A00;">Let's get in touch. Send us a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input  style="Background-color: #000000; color: #D30A00;" type="text" placeholder="Name" required name="Name:"></p>
      <p><input  style="Background-color: #000000; color: #D30A00;" type="text" placeholder="Email" required name="Email:"></p>
      <p><input  style="Background-color: #000000; color: #D30A00;" type="text" placeholder="Subject" required name="Subject:"></p>
      <textarea style="width: 100%; height: 160px; Background-color: #000000; color: #D30A00; resize: none;" placeholder="Type Message:"  required name="Message"></textarea>
      <p>
        <button class="w3-button w3-padding-large" style="Background-color: #D30A00; color: #000000;" type="submit">
         <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  <div class="" style="background-color: #000000; color: #ffffff;">
        <div class="w3-container w3-padding"  style="color: #D30A00;">
          <h4 style="color: #D30A00;">Subscribe</h4>
        </div>
        <div class="w3-container" style="color: #D30A00;">
          <p>Click the Subscribe Button Below for our Updates on Concert Events, Music and Other Miscallaneous Flounder Fun!</p>
          <p><button type="button" onclick="document.getElementById('subscribe').style.display='block'" class="w3-button w3-block" style="background-color: #D30A00; color: #ffffff;">Subscribe</button></p>
        </div>
      </div>
<!--</div>-->
</header>
<footer class="w3-center w3-text-red w3-padding-16">
  <p>Powered by  <a href="http://athena.ecs.csus.edu/~blockj/">&#9400; Julian Block </a> || Est. 2017  </a></p>
</footer>

<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content w3-black" style="padding:32px">
    <div class="w3-container w3-black">
	<img src="logo.png">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Enter your e-mail below and get notifications on our Monthly Newsletter and Event Dates.</p>
      <p><input class="w3-input w3-black w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>


<script>
// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function likeFunction(x) {
    x.style.fontWeight = "bold";
    x.innerHTML = "? Liked";
}

function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
</body>
</html>
