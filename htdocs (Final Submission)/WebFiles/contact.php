
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


<!-- Contact Form -->
<div class = "enterDetailsContainer">
  <h1 class = "homeHeadings"> Contact Us </h1>
  <div class = "inputBox">
  <p class = "subHeading2"> Have a question about Noah's Pet Clinic? If so, pop it in the form below, along with your contact 
  details, and we will either call you or reply to the email address you have provided within 24 hours!  </p>
  	
<form class = "npcForms" action="process_insertcontactinfo.php" method="post" name="userContact"> 

<h2 class = "formHeadings">First name: </h2>
<br>
<input type="text" name="First_Name" placeholder="First name" value=""> <br> 
<br>
<h2 class = "formHeadings">Last name: </h2>
<br>
<input type="text" name="Last_Name" placeholder="Last name" value=""> <br> 
<br>
<h2 class = "formHeadings">Email: </h2>
<br>
<input type="text" name="Email" placeholder="Email address" value=""> <br> 
<br>
<h2 class = "formHeadings">Telephone number: </h2>
<br>
<input type="text" name="Telephone" placeholder="Telehphone" value=""> <br> 
<br>
<h2 class = "formHeadings">Address: </h2>
<br>
<input type="text" name="Address_1" placeholder="Address Line 1" value=""> <br>
<br>
<input type="text" name="Address_2" placeholder="Address Line 2" value=""> <br> 
<br>
<input type="text" name="Address_3" placeholder="Address Line 3" value=""> <br> 
<br>
<input type="text" name="Address_4" placeholder="Address Line 4" value=""> <br> 
<br>
<h2 class = "formHeadings">Postcode: </h2>
<br>
<input type="text" name="Postcode" placeholder="Postcode" value=""> <br> 
<br>
<h2 class = "formHeadings">Query: </h2>
<br>
<textarea rows="10" cols="60" name="Query" placeholder="Enter your query here..."></textarea>
<br>
<input type="submit" value="Submit Query">

</form>

  <img id = "registerCat" src = "cat2.jpg">
  
  

</div>
</div>


<!-- Footer -->
<footer>
  <p id = "footerText"> Adam Martin, 2017 (I do not own any of these images. All rights go to copyright owners)</p>
</footer>

</div>

</body> 


</html>