<?php $title="Book A Class" ; include( "inc/header.php"); ?>


<h1 id='contactwelcome'> Please Choose a Service </h1>
<div class = "paddingBottom"></div>

<!-- This is going to print out the different services. E.G Sound Healing or Crystal Healing. In a button format -->
<div id="servicesOptions"></div>

<!-- Everything in this DIV will be hidden intill the Service is choosen -->
<div id ='changeDisplay' class="displayNone">
	<!-- This is going to print out information about the Service Choosen. -->
	<div class = "paddingBottom"></div>
	<h2 class="center">Description</h2>
	<div class = "paddingBottom"></div>
	<div id="serviceInformation"></div>
	<div class = "paddingBottom"></div>
	<h2 class="center">Classes Avaible:</h2>
	<!-- This is going to print out the number of classes avaible under a Service -->

	<div id="classesAvailble"></div>
</div>

<script src="js/booking.js"></script>

<?php include( "inc/footer.php"); ?>