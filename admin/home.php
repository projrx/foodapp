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
		.table2{
			width: 100%;
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
	<div class="container">

		<div class=""  data-animate="pulse" data-delay="500" >

		<span style="font-size: 25px;">Pending Orders: </span>
		
		
		<table class="table2 " style="padding: 1px !important;">

			<tr class="riderow">
				<td style="max-width:;">
				 <span> Order# </span><br> 
				 <span> 9009 </span> 
				</td>
				<td style="width: 60%">
				<div style="text-align: left;">
					<a href="assignorder.php" ><span style="font-size: 18px;"> Order Name </span> </a><br>
					<span>New Address of Order, Area, City</span>
				</div>
				</td>
				<td style="max-width:;">
				 <span> Price: </span><br> 
				 <span> Rs. 10,500/- </span> 
				</td>
			</tr>


			<tr class="riderow">
				<td style="max-width:;">
				 <span> Order# </span><br> 
				 <span> 9908 </span> 
				</td>
				<td style="width: 60%">
				<div style="text-align: left;">
					<a href="assignorder.php" ><span style="font-size: 18px;">Another Order Name </span> </a><br>
					<span>Full Address, Area, City</span>
				</div>
				</td>
				<td style="max-width:;">
				 <span> Price: </span><br> 
				 <span> Rs. 500/- </span> 
				</td>
			</tr>


			<tr class="riderow">
				<td style="max-width:;">
				 <span> Order# </span><br> 
				 <span> 9908 </span> 
				</td>
				<td style="width: 60%">
				<div style="text-align: left;">
					<a href="assignorder.php" ><span style="font-size: 18px;">Pending Order Name </span> </a><br>
					<span>Full Address, Area, City</span>
				</div>
				</td>
				<td style="max-width:;">
				 <span> Price: </span><br> 
				 <span> Rs. 5,000/- </span> 
				</td>
			</tr>


		</table>





	</div>
	<div class="" data-speed="100"  data-animate="fadeInRight" data-delay="500" >


		<span style="font-size: 25px;">Avaliable Riders: </span>
		<table class="table2 " style="padding: 1px !important;">

			<tr class="riderow">
				<td style="max-width: 100px;"> <img class="riderimg" src="images/riders/dp1.png"> </td>
				<td style="width: 70%">
				<div style="text-align: left;">
					<a href="riderprofile.php" ><span style="font-size: 18px;"> Rider Name </span> </a><br>
					<span> 03001234567</span>
				</div>
				</td>
				<td>
					<i style="color:#12d612" class="icon-dot-circle"> </i>
				</td>
			</tr>

			<tr class="riderow">
				<td style="max-width: 100px;"> <img class="riderimg" src="images/riders/dp2.png"> </td>
				<td style="width: 70%">
				<div style="text-align: left;">
					<a href="riderprofile.php" ><span style="font-size: 18px;">First Name </span> </a><br>
					<span> 03001234567</span>
				</div>
				</td>
				<td>
					<i style="color:#12d612" class="icon-dot-circle"> </i>
				</td>
			</tr>

			<tr class="riderow">
				<td style="max-width: 100px;"> <img class="riderimg" src="images/riders/dp3.png"> </td>
				<td style="width: 70%">
				<div style="text-align: left;">
					<a href="riderprofile.php" ><span style="font-size: 18px;"> New Rider Name </span> </a><br>
					<span> 03001234567</span>
				</div>
				</td>
				<td>
					<i style="color:#12d612" class="icon-dot-circle"> </i>
				</td>
			</tr>	

		</table>


</div>

			
	</div><!-- #wrapper end -->
	<br><br><br><br>

			<?php include 'include/footer.php'; ?>

	

</body>
</html>