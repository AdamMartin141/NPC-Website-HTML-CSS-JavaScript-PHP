
<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">

  <title> Noah's Pet Clinic </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head> 


<body> 
<div id = "Container">

<!-- Animated Banner -->
<header>
  <h1 class = "animatedTitle"> Noah's Pet Clinic</h1><br>
  <h1 class = "animatedTitle">Call 0161 123 4567 now! </h1>
    <div class = "animatedDescriptions">

      <div class = "desc1">
      <h2 class = "descHeadings">Modern Clinic</h2>
      <img class = "paw "src = "paw.png">
      </div>

      <div class = "desc2">
      <h2 class = "descHeadings">Professional Staff</h2>
      <img class = "paw "src = "paw.png">
      </div>

      <div class = "desc3">
      <h2 class = "descHeadings">Friendly Service</h2>
      <img class = "paw "src = "paw.png">
      </div>

    </div>

  </div>
</header>


<!-- Nav Bar -->
<nav>
  <ul class = "navList">
    <li class="NavItems"><a href="index.php">Home</a></li>
	<li class="NavItems"><a href="theClinic.php">The Clinic</a></li>
    <li class="NavItems"><a href="staff.php">Our Team</li></a>
    <li class="NavItems"><a href="services.php">Our Services</li></a>
    <li class="NavItems"><a href="contact.php">Contact Us</li></a>
	<li class="NavItems"><a href="findus.php">Find Us</li></a>
  </ul>
  <a><img id="headLogo1" src="NPCLogo2.png"></a>
</nav>


<!-- Photo Album -->
<div class = "photoAlbumContainer">
  <h1 class = "homeHeadings"> The Clinic </h1>
  <p class = "subHeading"> Here at Noah's Pet Clinic, we pride ourselves on providing a great service to you and your precious pet. Our
    newly refurbished clinic is crucial to us acheiving this. The reception area is modern and comfortable, and caters perfectly to both
    humans and animals alike. Upon arrival to the clinic, you will be greeted with a smile by one of our friendly reception staff, and  
	offered a complimentary tea or coffee to enjoy while you wait. We also understand that you may wish to bring your children to the 
	appointment, so toys are provided for them to play with while they wait.
	
    Once your appointment time arrives, you and your pet will be invited into one of our state of the art consultation rooms, which will 
	be filled with an array of modern equipment. During the appointment, your pet will be in the best possible hands, and be cared for by 
	one of our highly - trained, professional vet doctors and nurses. Take a look at the photo album below to view some images of our  
	newly-refurbished clinic, and look at some of our fantastic staff at work. If you like what you see, give us a call on 0161 123 4567 
	to book a free initial consultation for your pet.</p>

<div class="photoAlbum">
    <img class="clinicPhotos" src="reception.jpg">
    <img class="clinicPhotos" src="vetanddog.jpg">
    <img class="clinicPhotos" src="checkup.jpg">
    <img class="clinicPhotos" src="receptionist.jpg">
    <img class="clinicPhotos" src="vet.jpg">
</div>


<!-- Photo Album JavaScript (automatically change) -->
<script>
var albumStage = 0;
automaticAlbum();

function automaticAlbum() 
{
    var i;
    var x = document.getElementsByClassName("clinicPhotos");
	
    for (i = 0; i < x.length; i++) 
	{
       x[i].style.display = "none";
    }
    albumStage++;
	
    if (albumStage > x.length) {albumStage = 1
	}	
    x[albumStage-1].style.display = "block";
	
    setTimeout(automaticAlbum, 3000); 
}
</script>

</div>


<!-- Footer -->
<footer>
  <p id = "footerText"> Adam Martin, 2017 (I do not own any of these images. All rights go to copyright owners)</p>
</footer>


</div> <!-- end of container -->


</body>


</html>



