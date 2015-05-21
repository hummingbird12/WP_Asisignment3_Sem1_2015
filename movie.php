<?php 
	// Grab the movie we are serving up booking information for
    $unsafe_movieID = 0;
	$unsafe_movieID = $_GET["movieid"];
	$movieID = preg_replace("/[^0-9]/", "", $unsafe_movieID);	// Replace all non numeic characters as we are only expecting numeric

	// Add the header, jquery and other javascript validation steps
    include("includes/header_booking_form.php");
	// Add the top menu
    include("includes/menu.php");
	
?>
	<!-- Contents --> 
	<div class="contents">
<?php
		// Include the movie page based on which movie the user wants to look, retrieved from the global $_GET variable
		switch($movieID) {
			case 0:		// movie ID "0" is Home
				include("includes/movie_info_Home.php");
				break;
			case 1:
				include("includes/movie_info_Almanac.php");
				break;
			case 2:
				include("includes/movie_info_BackstreetBoys.php");
				break;
			case 3:
			default:
				include("includes/movie_info_50Shades.php");
				break;
		}
		
		// Include the booking form user input area
		include("includes/booking_form.php");
?>		
        <!-- Actual working form which sends the data the user inputs -->
        <form class="booking" action = "http://titan.csit.rmit.edu.au/~e54061/wp/form-tester-2.php" method = "post" >
			<fieldset>
				<input type="hidden" name="movie" value="<?php echo $movieID; ?>" />
				<input type="hidden" name="cinema" value="" id="submitCinemaFinal" />
				<input type="hidden" name="day" value="" id="submitDayFinal" />
				<input type="hidden" name="time" value="" id="submitTimeFinal" />
				<input type="hidden" name="price" value="" id="submitPriceFinal" />
				<input type="submit" value="Book Now"  />
				<input type="reset" id="resetForm" />
	    	</fieldset>
		</form>
	
	<!-- End contents DIV -->
	</div>
<?php
    include("includes/footer.php");
?>