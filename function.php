	<?php
		$session_expiration = time() + 3600 * 24 * 7; // +7 days
		session_set_cookie_params($session_expiration);
 		session_start();
		


 		// *********************function check voucher ***********************
 		function checkVoucher($voucherP)
 		{
 			// intialisation
 			$strlen = strlen($voucherP);
 			$array = array();
 			$count = 0; 
 			for ($i = 0; $i < 14 ; $i++)
 			{
 				$char = substr($voucherP,$i,1);
 				if ( $char != '-')
 				{
 					$array[$count] = $char;
 					$count++;
 				}
 				else if ($char == '-')
 				{
 					if ($i == 6 || $i == 12)	
 					{
 						echo "error";
 						return false;
 					}
 				}

 			}
 			$firstPart;
 			$secondPart;
 			// check sum algorithm 
 			$firstPart = ((($array[0] + $array[1]) * $array[2] + $array[3])*$array[4]) % 26;
			$secondPart = ((($array[5] + $array[6]) * $array[7] + $array[8])*$array[9]) % 26;
			$array[10] = (ord($array[10]) - 65);
			$array[11] = (ord($array[11]) - 65);

			// check if the checksum is the same as the array
			if($firstPart == $array[10] && $secondPart = $array[10])
			{
				echo "valid \n";
				return true;
				$discount = 0.2;
				$Total_m1 = ($Adult_m1*12 + $Conc_m1*10 + $Child_m1*8 + $FCA_m1*25 + $FCC_m1*20 +
 						$BB_m1*20)*$discount;
				$Total_m2 = ($Adult_m2*18 + $Conc_m2*15 + $Child_m2*12 + $FCA_m2*30 + $FCC_m2*25 + 
 						$BB_m2*30)*$discount;
				$Total_r1 = ($Adult_r1*12 + $Conc_r1*10 + $Child_r1*8)*$discount;
				$Total_r2 = ($Adult_r2*18 + $Conc_r2*15 + $Child_r2*12)*$discount;

			}
			// else error
			else
			{	
				echo "invalid \n";
				return false;
			}


 		}
		
		
		
		// ACKNOWELDEGEMENT: this code is inspired from 'Timothy John Yencken'	  
###########################
### -- cart functions -- ##
###########################


		    ## Globals
    if ( ! isset($_SESSION['cart'])) {  
        $_SESSION['cart'] = array();           ## make sure cart exists
    }

    ## Add to Cart
    function add($MOVIE) {
        if(isset($_SESSION['cart'][$MOVIE['id']])) {
            $_SESSION['cart'][$MOVIE['id']]['qty'] ++;
            return TRUE;
        } else {
            $_SESSION['cart'][$MOVIE['id']] = $MOVIE;
            $_SESSION['cart'][$MOVIE['id']]['qty'] = 1;
            return TRUE;
        }
        return FALSE;
    }
  
    ## Remove from Cart
    function remove($id) {
        if(isset($_SESSION['cart'][$id])) {
            if ($_SESSION['cart'][$id]['qty'] > 1) {
                $_SESSION['cart'][$id]['qty'] --;            
            } else {
                unset($_SESSION['cart'][$id]);
            }
            return TRUE;
        } else {
          return FALSE;
        }
        return FALSE;
    }
  

 	?>
