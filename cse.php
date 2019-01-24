<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Uttara University</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/boot.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/lato">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/mont">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="js/jqr.js">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="boot.js">
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 0px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(0%);
      filter: grayscale(0%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: red;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: green;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: black !important;
  }
  .navbar-nav li.active a {
      color: red !important;
      background-color: blue !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-toggle a:hover {
      
	  display: block;
	  }


.dropdown:hover .dropdown-menu {
display: block;

    background-color: #337DFF  ;
}
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Department Of Computer Science & Engineering</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li ><a href="cse.php">Home</a></li>
        <li><a href="cteacher.php">People</a></li>
						<li class="dropdown ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Academics
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Course</a></li>
            <li><a href="#">Class Routine</a></li>
            <li><a href="#"> Exam Routine </a></li>  
			 
			               
          </ul>
        </li>
		
		  
		
        				<li class="dropdown ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="dep.php">Student club
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Programming club</a></li> 
            <li><a href="#">Sports Club</a></li>
            <li><a href="#"> Robotics Club</a></li>
			
			               
          </ul>
        </li>
        <li><a href="contact.php">Contact</a></li>
       
        
      </ul>
    </div>
  </div>
</nav>



<!-- Container (The Band Section) --><br><br><br><br><br><br>
<div id="band" class="container text-center">
  <h3>Welcome To  Department Of Computer Science & Engineering</h3>
  
  <p>Uttara University, Bangladesh, has been able to establish a tradition of academic, non-academic and research facilities offering and providing under graduate, post graduate studies and research opportunities. Uttara University is widely recognized nationally and internationally for high quality education and research. The graduate of Uttara University and their job placement is the reflection of quality education and quality discipline. In the cosmopolitan campus of Uttara University, we see the student from all walks of life who can have access to the tertiary education and avail the opportunity to increase their knowledge and skill for their relatively high standard of life and living.</p>
  <br>
  
    </div>
  


  <!-- Modal -->
 

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  

  <div class="row">
    <div class="col-md-4">
      <p>Address.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Uttara, Dhaka</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 01717470245</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: uums@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  
<!-- Add Google Maps -->

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Website Made By <a href="#" data-toggle="tooltip" title="Visit w3schools">Uttarauniversity</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
