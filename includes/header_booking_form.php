<!DOCTYPE html> 
<html>
<head>
	<title>The Valentine</title>
	<meta charset="utf-8" />
	<meta name="author" content="Trung Do-s3443450, Sohum Raut-s3377766">
	<link href="http://fonts.googleapis.com/css?family=Oxygen:400,300,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="jquery-2.1.1.js"></script>
	<script type='text/javascript'>
		$(document).ready(function()
		{
            $("select").prop('selectedIndex',0);
            $(":input[type='number']").val("0");
            
			$("#ValentineDay").hide();
			$("#ValentineTime").hide();
			$("#ValentinePrice1").hide();
			$("#ValentinePrice2").hide();

			$("#OrsonDay").hide();
			$("#OrsonTime").hide();
			$("#OrsonPrice1").hide();
			$("#OrsonPrice2").hide();
			
			
			$("#resetForm").click(function(){
                $("select").prop('selectedIndex',0);
                $(":input[type='number']").val("0");
            
				$("#ValentineDay").hide("slow");
				$("#ValentineTime").hide("slow");
				$("#ValentinePrice1").hide("slow");
				$("#ValentinePrice2").hide("slow");

				$("#OrsonDay").hide("slow");
				$("#OrsonTime").hide("slow");
				$("#OrsonPrice1").hide("slow");
				$("#OrsonPrice2").hide("slow");
			});

			$("#cinemaType").change(function(){
				var cinemaStr = $('#cinemaType :selected').text();
                
				$("input#submitCinemaFinal").val(cinemaStr);
                
				if ( cinemaStr == "Valentine")
				{
					$("#ValentineDay").show("slow");
					$("#ValentineTime").hide("slow");
					$("#ValentinePrice1").hide("slow");
					$("#ValentinePrice2").hide("slow");
					$("#OrsonDay").hide();
					$("#OrsonDay").hide("slow");
					$("#OrsonTime").hide("slow");
					$("#OrsonPrice1").hide("slow");
					$("#OrsonPrice2").hide("slow");

				}
				else if (cinemaStr == "Orson")
				{
					$("#OrsonDay").show("slow");

					$("#OrsonTime").hide("slow");
					$("#OrsonPrice1").hide("slow");
					$("#OrsonPrice2").hide("slow");
					$("#ValentineDay").hide();
					$("#ValentineDay").hide("slow");
					$("#ValentineTime").hide("slow");
					$("#ValentinePrice1").hide("slow");
					$("#ValentinePrice2").hide("slow");
				}
            });

			$("#ValentineDay").change(function(){
				var cinemaDay = $('#ValentineDay :selected').text();
				
                $("input#submitDayFinal").val(cinemaDay);
                
				if ( cinemaDay == "Monday" || cinemaDay == "Tuesday")
				{
					$("#ValentineTime").show("slow");
					$("#ValentinePrice1").show("slow");

					$("#ValentinePrice2").hide("slow");
					$("#OrsonDay").hide("slow");
					$("#OrsonTime").hide("slow");
					$("#OrsonPrice1").hide("slow");
					$("#OrsonPrice2").hide("slow");

				}
				else if ( cinemaDay == "Wednesday" || cinemaDay == "Thursday" ||  cinemaDay == "Friday" || cinemaDay == "Saturday" || cinemaDay == "Sunday")
				{
					
					$("#ValentineTime").show("slow");
					$("#ValentinePrice2").show("slow");

					$("#ValentinePrice1").hide("slow");
					$("#OrsonDay").hide("slow");
					$("#OrsonTime").hide("slow");
					$("#OrsonPrice1").hide("slow");
					$("#OrsonPrice2").hide("slow");
				}
            });

			$("#OrsonDay").change(function(){
				var cinemaDay = $('#OrsonDay :selected').text();
                
                $("input#submitDayFinal").val(cinemaDay);
                
				if ( cinemaDay == "Wednesday" || cinemaDay == "Thursday" || cinemaDay == "Friday")
				{
					$("#OrsonTime").show("slow");	
				}
				else if ( cinemaDay == "Wednesday" || cinemaDay == "Thursday" ||  cinemaDay == "Friday" || cinemaDay == "Saturday" || cinemaDay == "Sunday")
				{
					$("#OrsonTime").show("slow");
				}
            });
            
            $("#ValentineTime").change(function(){
				var cinemaTime = $('#ValentineTime :selected').text();
                
                $("input#submitTimeFinal").val(cinemaTime);
			});
                
			$("#OrsonTime").change(function(){
				var cinemaTime = $('#OrsonTime :selected').text();
                
                $("input#submitTimeFinal").val(cinemaTime);
                
				if ( cinemaTime == "12pm")
				{
					
					$("#OrsonPrice1").show("slow");

					$("#OrsonPrice2").hide("slow");
					$("#ValentineDay").hide("slow");
					$("#ValentineTime").hide("slow");
					$("#ValentinePrice1").hide("slow");
					$("#ValentinePrice2").hide("slow");

				}
				else if ( cinemaTime == "3pm" || cinemaTime == "6pm" || cinemaTime == "9pm")
				{
					
					$("#OrsonPrice1").show("slow");

					$("#OrsonPrice2").hide("slow");
					$("#ValentineDay").hide("slow");
					$("#ValentineTime").hide("slow");
					$("#ValentinePrice1").hide("slow");
					$("#ValentinePrice2").hide("slow");
				
				}
            });	
		});
	</script>
	<!-- script to calculate Price table Valentine Monday-Tuesday --> 
	<script type="text/javascript">
		// Valentine Adult price on Monday and Tuesday
		function ValentineAdult1()
		{
			var AdultValentinePrice1 = 12;
			var  seatNumber = parseInt(document.getElementById("AdultValentine1").value);
			var salePriceAdult1 = 0;

			salePriceAdult1 = (seatNumber) * (AdultValentinePrice1);
			document.getElementById("salePriceAdult1").innerHTML = salePriceAdult1;
			return salePriceAdult1;
		}

		function ValentineConc1()
		{
			var ConcValentinePrice1 = 10;
			var  seatNumber = parseInt(document.getElementById("ConcValentine1").value);
			var salePriceConc1 = 0;

		
			salePriceConc1 = (seatNumber) * (ConcValentinePrice1);
			document.getElementById("salePriceConc1").innerHTML = salePriceConc1;
			return salePriceConc1;
			
		}

		function ValentineChild1()
		{
			var ChildValentinePrice1 = 8;
			var  seatNumber = parseInt(document.getElementById("ChildValentine1").value);
			var salePriceChild1 = 0;

			salePriceChild1 = (seatNumber) * (ChildValentinePrice1);
			document.getElementById("salePriceChild1").innerHTML = salePriceChild1;
			return salePriceChild1;
		}


		function ValentineFCA1()
		{
			var FCAValentinePrice1 = 25;
			var  seatNumber = parseInt(document.getElementById("FCAValentine1").value);
			var salePriceFCA1 = 0;


			salePriceFCA1 = (seatNumber) * (FCAValentinePrice1);
			document.getElementById("salePriceFCA1").innerHTML = salePriceFCA1;
			return salePriceFCA1;
		}

		function ValentineFCC1()
		{
			var FCCValentinePrice1 = 20;
			var  seatNumber = parseInt(document.getElementById("FCCValentine1").value);
			var salePriceFCC1 = 0;


			salePriceFCC1 = (seatNumber) * (FCCValentinePrice1);
			document.getElementById("salePriceFCC1").innerHTML = salePriceFCC1;
			return salePriceFCC1;
		}

		function ValentineBB1()
		{
			var BBValentinePrice1 = 20;
			var  seatNumber = parseInt(document.getElementById("BBValentine1").value);
			var salePriceBB1 = 0;

			salePriceBB1 = (seatNumber) * (BBValentinePrice1);
			document.getElementById("salePriceBB1").innerHTML = salePriceBB1;
			return salePriceBB1;
		}
	
		function ValentineTotal1()
		{
			var ValentineBB1Total = ValentineBB1();
			var ValentineFCC1Total = ValentineFCC1();
			var ValentineFCA1Total = ValentineFCA1();
			var ValentineChild1Total = ValentineChild1();
			var ValentineConc1Total = ValentineConc1();
			var ValentineAdult1Total = ValentineAdult1();
			var total1 = 0;

			Total1 =  ValentineBB1Total + ValentineFCC1Total + ValentineFCA1Total + ValentineChild1Total + ValentineConc1Total + ValentineAdult1Total;
			document.getElementById("submitPrice1").value = Total1;
			document.getElementById("Total1").innerHTML = Total1;
            
            $("input#submitPriceFinal").val(Total1);
            
			return Total1;
		}	
	</script>
			
	<!-- script to calculate Price table Valentine Wednesday to Sunday  --> 
	<script type="text/javascript">
		function ValentineAdult2()
		{
			var AdultValentinePrice2 = 18;
			var  seatNumber = parseInt(document.getElementById("AdultValentine2").value);
			var salePriceAdult2 = 0;

			salePriceAdult2 = (seatNumber) * (AdultValentinePrice2);
			document.getElementById("salePriceAdult2").innerHTML = salePriceAdult2;
			return salePriceAdult2;
			
		}

		function ValentineConc2()
		{
			var ConcValentinePrice2 = 15;
			var  seatNumber = parseInt(document.getElementById("ConcValentine2").value);
			var salePriceConc2 = 0;

		
			salePriceConc2 = (seatNumber) * (ConcValentinePrice2);
			document.getElementById("salePriceConc2").innerHTML = salePriceConc2;
			return salePriceConc2;
			
		}

		function ValentineChild2()
		{
			var ChildValentinePrice2 = 12;
			var  seatNumber = parseInt(document.getElementById("ChildValentine2").value);
			var salePriceChild2 = 0;


			salePriceChild2 = (seatNumber) * (ChildValentinePrice2);
			document.getElementById("salePriceChild2").innerHTML = salePriceChild2;
			return salePriceChild2;
			
		}


		function ValentineFCA2()
		{
			var FCAValentinePrice2 = 30;
			var  seatNumber = parseInt(document.getElementById("FCAValentine2").value);
			var salePriceFCA2 = 0;


			salePriceFCA2 = (seatNumber) * (FCAValentinePrice2);
			document.getElementById("salePriceFCA2").innerHTML = salePriceFCA2;
			return salePriceFCA2;
			
		}

		function ValentineFCC2()
		{
			var FCCValentinePrice2 = 25;
			var  seatNumber = parseInt(document.getElementById("FCCValentine2").value);
			var salePriceFCC2 = 0;


			salePriceFCC2 = (seatNumber) * (FCCValentinePrice2);
			document.getElementById("salePriceFCC2").innerHTML = salePriceFCC2;
			return salePriceFCC2;
			
		}

		function ValentineBB2()
		{
			var BBValentinePrice2 = 30;
			var  seatNumber = parseInt(document.getElementById("BBValentine2").value);
			var salePriceBB2 = 0;

			salePriceBB2 = (seatNumber) * (BBValentinePrice2);
			document.getElementById("salePriceBB2").innerHTML = salePriceBB2;
			return salePriceBB2;
			
		}
	
		function ValentineTotal2()
		{
			var ValentineBB2Total = ValentineBB2();
			var ValentineFCC2Total = ValentineFCC2();
			var ValentineFCA2Total = ValentineFCA2();
			var ValentineChild2Total = ValentineChild2();
			var ValentineConc2Total = ValentineConc2();
			var ValentineAdult2Total = ValentineAdult2();
			var total2 = 0;

			Total2 =  ValentineBB2Total + ValentineFCC2Total + ValentineFCA2Total + ValentineChild2Total + ValentineConc2Total + ValentineAdult2Total;
			document.getElementById("submitPrice2").value = Total2;
			document.getElementById("Total2").innerHTML = Total2;
            
            $("input#submitPriceFinal").val(Total2);
            
			return Total2;
		}
	</script>
	
	<!-- script to calculate Price table Orson Wed-Fri 12pm  --> 
	<script type="text/javascript">
		function OrsonAdult3()
		{
			var AdultOrsonPrice3 = 18;
			var  seatNumber = parseInt(document.getElementById("AdultOrson3").value);
			var salePriceAdult3 = 0;

			salePriceAdult3 = (seatNumber) * (AdultOrsonPrice3);
			document.getElementById("salePriceAdult3").innerHTML = salePriceAdult3;
			return salePriceAdult3;
			
		}

		function OrsonConc3()
		{
			var ConcOrsonPrice3 = 15;
			var  seatNumber = parseInt(document.getElementById("ConcOrson3").value);
			var salePriceConc3 = 0;

			salePriceConc3 = (seatNumber) * (ConcOrsonPrice3);
			document.getElementById("salePriceConc3").innerHTML = salePriceConc3;
			return salePriceConc3;
			
		}

		function OrsonChild3()
		{
			var ChildOrsonPrice3 = 12;
			var seatNumber = parseInt(document.getElementById("ChildOrson3").value);
			var salePriceChild3 = 0;


			salePriceChild3 = (seatNumber) * (ChildOrsonPrice3);
			document.getElementById("salePriceChild3").innerHTML = salePriceChild3;
			return salePriceChild3;	
		}
		function OrsonFCA3()
		{
			var FCAOrsonPrice3 = 30;
			var  seatNumber = parseInt(document.getElementById("FCAOrson3").value);
			var salePriceFCA3 = 0;


			salePriceFCA3 = (seatNumber) * (FCAOrsonPrice3);
			document.getElementById("salePriceFCA3").innerHTML = salePriceFCA3;
			return salePriceFCA3;
			
		}

		function OrsonFCC3()
		{
			var FCCOrsonPrice2 = 25;
			var  seatNumber = parseInt(document.getElementById("FCCOrcon3").value);
			var salePriceFCC3 = 0;


			salePriceFCC3 = (seatNumber) * (FCCOrsonPrice2);
			document.getElementById("salePriceFCC3").innerHTML = salePriceFCC3;
			return salePriceFCC3;
			
		}

		function OrsonBB3()
		{
			var BBOrsonPrice3 = 30;
			var  seatNumber = parseInt(document.getElementById("BBOrson3").value);
			var salePriceBB3 = 0;

			salePriceBB3 = (seatNumber) * (BBOrsonPrice3);
			document.getElementById("salePriceBB3").innerHTML = salePriceBB3;
			return salePriceBB3;
			
		}
		
		
		function OrsonTotal3()
		{
			var OrsonChild3Total = OrsonChild3();
			var OrsonConc3Total = OrsonConc3();
			var OrsonAdult3Total = OrsonAdult3();
			var OrsonFCA3Total = OrsonFCA3();
			var OrsonFcc3Total = OrsonFCC3();
			var OrsonBB3Total = OrsonBB3();
			var total3 = 0;

			Total3 = OrsonChild3Total + OrsonConc3Total + OrsonAdult3Total + OrsonFCA3Total +OrsonFcc3Total+ OrsonBB3Total;
			document.getElementById("submitPrice3").value = Total3;
			document.getElementById("Total3").innerHTML = Total3;
            
            $("input#submitPriceFinal").val(Total3);
            
			return Total3;
		}
	</script>
	
	<!-- script to calculate Price table Orson Wed-Fri 12pm, Sat-Sun 4pm and 7pm  --> 
	<script type="text/javascript">
		function OrsonAdult4()
		{
			var AdultOrsonPrice4 = 18;
			var  seatNumber = parseInt(document.getElementById("AdultOrson4").value);
			var salePriceAdult4 = 0;

			salePriceAdult4 = (seatNumber) * (AdultOrsonPrice4);
			document.getElementById("salePriceAdult4").innerHTML = salePriceAdult4;
			return salePriceAdult4;
			
		}

		function OrsonConc4()
		{
			var ConcOrsonPrice4 = 15;
			var  seatNumber = parseInt(document.getElementById("ConcOrson4").value);
			var salePriceConc4 = 0;

		
			salePriceConc4 = (seatNumber) * (ConcOrsonPrice4);
			document.getElementById("salePriceConc4").innerHTML = salePriceConc4;
			return salePriceConc4;
			
		}

		function OrsonChild4()
		{
			var ChildOrsonPrice4 = 12;
			var seatNumber = parseInt(document.getElementById("ChildOrson4").value);
			var salePriceChild4 = 0;

			salePriceChild4 = (seatNumber) * (ChildOrsonPrice4);
			document.getElementById("salePriceChild4").innerHTML = salePriceChild4;
			return salePriceChild4;	
		}
		
		function OrsonTotal4()
		{
			var OrsonChild4Total = OrsonChild4();
			var OrsonConc4Total = OrsonConc4();
			var OrsonAdult4Total = OrsonAdult4();
			var total4 = 0;

			Total4 = OrsonChild4Total + OrsonConc4Total + OrsonAdult4Total;
			document.getElementById("submitPrice4").value = Total4;
			document.getElementById("Total4").innerHTML = Total4;
            
            $("input#submitPriceFinal").val(Total4);
            
			return Total4;
		}
	</script> 

</head>
<body>

	<div class="header">
		<div class="headerContent">
			<div class="cinemaName">
				<img src="data/TheValentine_1.png" alt="The Valentine">
			</div>
		</div>
	</div>