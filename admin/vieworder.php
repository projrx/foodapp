<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<?php include 'include/head.php'; ?>
	<!-- Document Title
	============================================= -->
	<title>Food App</title>
	<style type="text/css">
		td{
			vertical-align: middle !important	;
			text-align: center;
			border: 0px solid red !important
		}
		.table2 tr , .table2 td{
			padding-top: 10px;
			padding-bottom: 10px;
			padding-right: 10px;
		}
		

	</style>

</head>

<body class="stretched">
		<?php include 'include/myheader.php'; ?>
	<br><br><br><br><br>	


	<!-- Document Wrapper
	============================================= -->



	<div class="container" style="padding-left: 10px !important;    padding-right: 10px !important;">
		<br>
		<span style="font-size: 25px;"> Order Detail: </span>
		<br>
		<div class="">

			 <span class="color"> Order# </span> <span> 9908 </span> 
			 <br>
				<span class="color"> Order Name:  </span><span> Completed Order  - </span> </a> <span class="color"> Price: </span> <span> Rs. 10,500/- </span> 
				<br>
				<span class="color">Address: </span>	<span> Full Complete Address </span>
			</div>

			<div class="">
				<br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d26144.402416174744!2d74.29800335445348!3d31.57277727514025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x39191c47be50fcdb%3A0x3cf241986ed44db5!2sShahdara%2C%20Lahore%2C%20Punjab%2C%20Pakistan!3m2!1d31.621112699999998!2d74.2823662!4m5!1s0x0%3A0xe794b7167799aa1a!2sChauburji!3m2!1d31.5540049!2d74.3048427!5e0!3m2!1sen!2s!4v1586346130216!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


			</div>


		<div>
			<br>
			<span style="font-size: 25px;">Rider Detail: </span><br>

			<table style="width: 100%;">
				<tr>
					<td style="text-align: left;">
			<span> Rider Name: <a href="rider.php">New Rider </a> </span><br>
			<span> Rider Phone: <a href="rider.php">03001234567 </a> </span><br>
				</td>
				<td style="text-align: middle"> 
					<a href="tel:03001234567"> <i style="font-size: 40px" class="icon-phone-sign"> </i></a>
				</td>
			</tr>
		</table>


		</div>


			
	</div><!-- #wrapper end -->
	<br><br><br><br>

			<?php include 'include/footer.php'; ?>

	

</body>
</html>