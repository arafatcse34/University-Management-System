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
      background-color: Green  !important;
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
      <a class="navbar-brand" href="#myPage">Uttara University</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li ><a href="index.html">Home</a></li>
        <li class="active"><a href="about.php">about us</a></li>
						<li class="dropdown ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="dep.php">Faculty
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cteacher.php"> Computer Science & Engineering</a></li>
            <li><a href="eteacher.php">Electrical & Electronic Engineering</a></li>
            <li><a href="lteacher.php"> Law</a></li>
			
			               
          </ul>
        </li>
		
		  <li><a href="#">Admission</a></li>
		
        				<li class="dropdown ">
          <a class="dropdown-toggle" data-toggle="dropdown" href="dep.php">Department
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cse.php">Department Of Computer Science & Engineering</a></li>
            <li><a href="eee.php">Department Of Electrical & Electronic Engineering</a></li>
            <li><a href="l.php">Department Of Law</a></li>
			
			               
          </ul>
        </li>
		<li><a href="result.php">Result</a></li>
        <li><a href="#">Contact</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="admin/index.php">admin login</a></li>
            <li><a href="student/index.php">Student login</a></li>
            <li><a href="teacher/index.php">Teacher login</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>


<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>History</h3>
  
  <p>Situated in the outskirts of Dhaka City, Uttara University is a center of excellence for tertiary education in Bangladesh. It was started in 2003 with a few students and departments. But by now it has grown as a full-fledged university offering under-graduate and graduate programs and research opportunities. It is widely recognized nationally and internationally for its motto of quality education at affordable tuition. The graduates produced here and their job placements are the reflections of quality education at Uttara University. In this cosmopolitan campus, students from all walks of life can have access to the tertiary education and avail the opportunity to face the global challenge and lead a relatively high standard of living. To upgrade the students academically (using international collaboration), with etiquette and grooming, the prime objective is to help grow students professionally. The university helps them prepare for demanding corporate fields along with the development of their professional and rational skills.

Uttara University was founded by a Trustee Board. The members of the TRUST are educationists, economists and businessmen of eminence and recognition. Prof. Dr. M. Azizur Rahman is the Vice-Chancellor and founder Chairman of the Trustee Board and Prof. Dr. Eaysmin Ara Lekha is the founder Vice-Chairman of the Board.

Prof. Dr. M. Azizur Rahman, founder of Uttara University, is a former economic adviser of the US Embassy (Dhaka), a renowned academician of the country and an eminent economist of international repute, and an alumnus of Vanderbilt University, a Nobel Laureate school in USA. He possesses ingenuity in national education that benefits the students who would like to build up their sustainable career in modern global market. In this spirit, Dr. Rahman established a good number of educational institutions including Uttara University where meritorious and enthusiastic students are benefited by using their merit with qualitative ingredients.

He is a column writer and this is how he addresses burning national and international issues for mass consumption and amelioration. Of late he has published couple of books on political, economic and social issues. He has shone as a poet also and has in his credit ten books on poetry.

Prof. Dr. Eaysmin Ara Lekha is the first Pro-Vice-Chancellor of the Uttara University. In recognition of her meritorious service and experience in the field of education, she has been appointed Pro-Vice-Chancellor by the hon'ble Chancellor. Before joining as Pro-Vice-Chancellor, she was the Dean of the School of Education and Physical Education and also the Professor and Chairman of Education Department. She is the author of a number of books. As a patron of learning she has established a couple of educational institutions including Sabira Rouf College, Gopalganj.
</p>
<br>
  
    </div>
  


  <!-- Modal -->
 
       

<!-- Container (Contact Section) -->

  <br>
  
<!-- Add Google Maps -->
<div id="googleMap"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(41.878114, -87.629798);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>


<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

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
