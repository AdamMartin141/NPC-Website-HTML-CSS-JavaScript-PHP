
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


<!-- Products and Services Table -->
<div class = "productsContainer">
  <h1 class = "homeHeadings"> Our Services and Products </h1>
  <p class = "subHeading2"> Want to learn about the services we offer? Select a service from the drop down menu below and click 
  'Search Services' to view more details about it. If you are interested in booking an appointment for one of the services, call 
  our friendly team on 0161 123 4567!</p>
  
 <form class="dropDown" action='services.php' method='POST'>
    <h3 id = "dropDownHead"> Select a Service from the Drop Down Menu and click 'Search Services': </h3>
	<br>

    <select name='dropDownList'>

        <option value=''>All Services</option>
        <option value='Dog Consultation'>Dog Consultation</option>
        <option value='Cat Consultation'>Cat Consultation</option>
        <option value='Bird Consultation'>Bird Consultation</option>
        <option value='Small Pet Consultation'>Small Pet Consultation</option>
		<option value='Flea Treatments'>Flea Treatments</option>
		<option value='Vaccinations'>Vaccinations</option>
		<option value='Microchipping'>Microchipping</option>
		<option value='Pet Food'>Pet Food</option></select><br><br>
        <input type='submit' name='searchDatabase' value='Search Services'><br><br><br>

	
    <table>

        <tr>
            <th>Service:</th>
            <th>Description:</th>
            <th>Cost:</th>
        </tr>
				
		<?php include("process_servicesearch.php"); 
		?>
		
        <?php while 
		($tableRow = mysqli_fetch_array($returnedService)):
		?>
            <tr>
                <td><?php echo $tableRow['Service'];?></td>
                <td><?php echo $tableRow['Description'];?></td>
                <td><?php echo $tableRow['Cost'];?></td>
            </tr>
        <?php endwhile; 
		?>

    </table>

</form>
</div>


<!-- Footer -->
<footer>
  <p id = "footerText"> Adam Martin, 2017 (I do not own any of these images. All rights go to copyright owners)</p>
</footer>





</div>
</body>

