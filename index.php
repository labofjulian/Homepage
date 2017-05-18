<!DOCTYPE html>
<html>
<title>Julian Block</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
body{
	background-image: url("Cl.jpg");
    -webkit-animation-name: example;
	-webkit-animation-duration: 5s;
	animation-name: example;
	animation-duration: 5s;
	animation-iteration-count: 1;
	background-image: url("Cl.jpg");
}
@keyframes example {
	0% {background-image: url("cl.jpeg");}
	20% {background-image: url("cl.jpeg");}
	40% {background-image: url("Cl.jpg");}
	50% {background-image: url("Cl.jpg");}
	100% {background-image: url("Cl.jpg");}
    }

</style>
<body>

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small  w3-center" style="color: #009933; background-color: #000000;">
  <!-- Avatar image in top left corner -->
  <img src="JulianBlock.jpg" style="width:100%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large this.style.color='#00ff00' w3-hover" onMouseOver="this.style.color='#009933'">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button this.style.color='#009933' w3-padding-large w3-hover" onMouseOver="this.style.color='#009933'">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button this.style.color='#009933' w3-padding-large w3-hover" onMouseOver="this.style.color='#009933'">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button this.style.color='#009933' w3-padding-large w3-hover" onMouseOver="this.style.color='#009933'">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class=" w3-padding-32 w3-center" id="home">
    <h1 class="w3-jumbo" style=" color: #009933;"><span class="w3-hide-small"></span> Julian Block </h1>
    <p style=" color: #009933">Software Engineer and Web Developer</p>
    <img src="hh.jpg" alt="Julian" class="w3-image " width="692" height="890">
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-padding-64" id="about"><div class="w3-container w3-black"> 
    <h2 class="w3-container " style=" color: #009933;">Julian Block</h2>
    <hr style="width:200px" class="w3-opacity">
    <p class="w3-container " style=" color: #009933;">     Hello, my name is Julian Block and I offer a wide variety of IT Services including Software Engineering, Web Development, Android Development, and Malware Removal. Rates and Services vary 
	upon the intended job presented by the Client, however, my typical rate for monthly maintenance is $880. I always make sure that the Product fits the Satisfaction of the Client and the Users. If you've got a great app Idea, need a website or software for your organization, or need some Malware removed from your System, let's get in touch!  
	</div>
    </p></div>
	
	<div class="w3-container w3-black"> 
    <h3 class="w3-padding-16 " style=" color: #009933;">My Skills</h3>
    <p class="w3-wide " style=" color: #009933;">>Software Engineering</p>
	<p class="w3-wide w3-container " style=" color: #009933; ">>Languages I use for Software Engineering include C++, C#, Java, x86 Assembly Language and Python. </p>
    <div class="w3-white">
      <div class="w3-green" style="height:28px;width:99%"></div>
    </div>
    <p class="w3-wide " style=" color: #009933;">>Web Development</p>
	<p style=" color: #009933;">>Languages I use for Web Development include JavaScript, PHP, MySQL, Html and CSS. </p>
    <div class="w3-white">
      <div class="w3-green" style="height:28px;width:95%"></div>
    </div>
    <p class="w3-wide " style=" color: #009933;">>Android Development</p>
	<p style=" color: #009933;">>The primary Language I use for Android Development is Java. </p>
    <div class="w3-white">
      <div class="w3-green" style="height:28px;width:95%"></div>
    </div>
	<p class="w3-wide" style=" color: #009933;">>Malware Removal</p>
    <div class="w3-white">
      <div class="w3-green" style="height:28px;width:100%"></div>
    </div><br></div> 
    
    <div class="w3-row w3-center w3-padding-16 w3-section w3-green">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">11+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">55+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">89+</span><br>
        Happy Clients
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">150+</span><br>
        Meetings
      </div>
    </div>

    
    
    <!-- Grid for pricing tables -->
    <h3 class="w3-padding-16 " style="color: #009933;">My Price</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-center w3-opacity w3-hover-opacity-off" style=" Background-color: #009933;">
          <li class="w3-green w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16" style=" Background-color: #009933; color: #ffffff;">Web Development</li>
          <li class="w3-padding-16" style=" Background-color: #009933; color: #ffffff;">Software Engineering</li>
          <li class="w3-padding-16" style=" Background-color: #009933; color: #ffffff;">Android Development</li>
          <li class="w3-padding-16" style=" Background-color: #009933; color: #ffffff;">Malware Removal</li>
          <li class="w3-padding-16" style=" Background-color: #009933; color: #ffffff;">
            <h2>$ 880</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-block w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

    
    <!-- Testimonials -->
    <!--<h3 class="w3-padding-24 w3-text-light-grey">My Reputation</h3>  
    <!--<img src="/w3images/bandmember.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Chris Fox.</span> CEO at Mighty Schools.</p>
    <p>Jane Doe saved us from a web disaster.</p><br>
    
    <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-margin-right">Rebecca Flex.</span> CEO at Company.</p>
    <p>No one is better than Jane Doe.</p>
  <!-- End About Section -->
  </div>
  
  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey" style="color: #009933;">My Photos</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="/w3images/wedding.jpg" style="width:100%">
        <img src="/w3images/rocks.jpg" style="width:100%">
        <img src="/w3images/sailboat.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="/w3images/underwater.jpg" style="width:100%">
        <img src="/w3images/chef.jpg" style="width:100%">
        <img src="/w3images/wedding.jpg" style="width:100%">
        <img src="/w3images/p6.jpg" style="width:100%">
      </div>
    <!-- End photo grid -->
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text" style="color: #009933;">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p style="color: #009933;"><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right" style="color: #009933;"></i> Sacramento, CA</p>

      <p style="color: #009933;"><i class="fa fa-envelope fa-fw  w3-xxlarge w3-margin-right"> </i> Email: Jblock328@gmail.com</p>
    </div><br>
    <p style="color: #009933;">Let's get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input  style="Background-color: #ffffff; color: #00ff00;" type="text" placeholder="Name" required name="Name:"></p>
      <p><input  style="Background-color: #000000; color: #00ff00;" type="text" placeholder="Email" required name="Email:"></p>
      <p><input  style="Background-color: #000000; color: #00ff00;" type="text" placeholder="Subject" required name="Subject:"></p>
      <textarea style="width: 100%; height: 160px; Background-color: #000000; color: #00ff00; resize: none;" placeholder="Type Message:"  required name="Message"></textarea>
      <p>
        <button class="w3-button w3-padding-large" style="Background-color: #009933; color: #000000;" type="submit">
         <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity" style="color: #009933;"></i>
    <i class="fa fa-linkedin w3-hover-opacity" style="color: #009933;"></i>
    <p class="w3-medium" style="color: #009933;"><a href="http://athena.ecs.csus.edu/~blockj/">&#9400 Julian Block  </a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
