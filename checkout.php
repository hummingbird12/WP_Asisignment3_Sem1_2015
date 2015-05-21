<?php

	// ACKNOWELDEGEMENT: this code is inspired from 'Timothy John Yencken'	
		    ## Cart Empty?
  /*  if (count($_SESSION['cart']) == 0) {
        header('Location: product.php');
    }
    */
    ## Add
    if (isset($_POST['submit']) && $_POST['submit'] == 'add' ) {
        $MOVIE = $MOVIE[$_POST['id']]; 
        add($MOVIE);
        header('Location: checkout.php');
    }
    
    ## Remove
    if (isset($_POST['submit']) && $_POST['submit'] == 'remove' ) {
        remove($_POST['id']);
        header('Location: checkout.php');
    }
	  
	include("includes/header_booking_form.php");
	// Add the top menu
    include("includes/menu.php");
	include("function.php");
	require_once("product.php");
	//add($MOVIE);
	

?>

<body>
	<div class = "content">
		<div>
			<p><span id='voucherP'></span></p>
		</div>
		<div>
			<p><span id='TotalM1'></span></p>
			<?php echo $_SESSION['test'];
					echo "<p>This is a test </p>"; ?>
		</div>
	</div>
</body>

<?php
   include("includes/footer.php");
?>