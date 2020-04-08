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
			text-align: left;
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
		<span style="font-size: 25px;">View Order Detail: </span>
		<br>
		<br>
		<div class="">
			<div class="card">
			<div class="card-body">

			<center><span class="color" style="font-size: 18px;"> Order Summery: </span></center><br>

			<table class="table2">
				<tr>
					<td> 
			 <span class="color"> Order# </span> 
			</td>
			 <td>
			  <span> 9908 </span>
			  </td>
			</tr>
			<tr>
				<td>
				<span class="color"> Order Name:  </span>
			</td><td>
				<span> Completed Order  - </span> </a> 
			</td>
		</tr>
		<tr>
				<td>
				<span class="color"> Price: </span> </td><td> <span> Rs. 10,500/- </span> </td>
			</tr>
			<tr>
				<td>
				<span class="color">Address: </span>
				</td><td>	<span> Full Complete Address </span></td>
			</tr>
			<tr>
				<td>
				<span class="color"> Strated At: </span> </td><td> <span> 2020-03-05 15:53:40 </span> 
				</td></tr>
				<tr>
					<td>
				<span class="color">Deliverd At: </span> </td><td>	<span> 2020-03-05 14:20:40 </span>
				</td>
			</tr>
				<tr>
					<td>
				<span class="color">Rider : </span> </td><td>	<span>Rider Name </span>
				</td>
			</tr>

			</table>

			</div>
			</div>
			</div>

			<div class="">
				<br>
				<br>
				<center>
    	<a class="neworder" href="#.php"> <i class="icon-print"></i> Print </a>
					
				</center>
				


			</div>


		<div>
			<br>

		


		</div>


			
	</div><!-- #wrapper end -->
	<br><br><br><br>

			<?php include 'include/footer.php'; ?>

	

</body>
</html>