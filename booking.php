    <?php
	// keep customer prefer seat online up to one week advance
	
    session_start();
	// Add the header, jquery and other javascript validation steps
    include("includes/header_booking_form.inc");
	// Add the top menu
    include("includes/menu.inc");
			
	require_once("product.php");
	require_once("function.php");
	    ## Add
    if (isset($_GET['submit']) && $_GET['submit'] == 'add' ) {
        $MOVIE = $PRODUCT[$_GET['id']]; 
        add($MOVIE);
        header('Location: product.php');
		}
    ?>
    <div class="contents">
		
        <p><b>Booking list</b><p>