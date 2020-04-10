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
		<span style="font-size: 25px;">Assign Pending Order Detail: </span>
		<br>
		<br>
		<div class="">
			<div class="card">
			<div class="card-body">

			<center><span class="color" style="font-size: 18px;"> Order Summery: </span></center><br>

			 <span class="color"> Order# </span> <span> 9908 </span> 
			 <br>
				<span class="color"> Order Name:  </span><span> Completed Order  - </span> </a> 
				<br>
				<span class="color"> Price: </span> <span> Rs. 10,500/- </span> 
				<br>
				<span class="color">Address: </span>	<span> Full Complete Address </span>
			</div>
			</div>
			</div>

			<div class="">
				<br>
				


			</div>


		<div>

			<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27197.220145527084!2d74.29954835239259!3d31.561149593640643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe794b7167799aa1a!2sChauburji!5e0!3m2!1sen!2s!4v1586354210910!5m2!1sen!2s" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

			
			<br>

			<center><span class="color" style="font-size: 25px;"> Assign Rider: </span></center><br>
			<table style="width: 100%;">
				<tr>
					<td style="text-align: left;">
						<span>  Rider: </span>
				</td>
				<td style="text-align: left"> 

					<select class="form-control">
						<option> Rider Name 1</option>
						<option> Full Rider Name 1</option>
						<option> New Complete Rider 1</option>
					</select>

				</td>
				<td><div style="min-width: 20px"></div></td>
			</tr>
			<tr>
				<td colspan="3">
					<center>
						<br><br>
					<a href="home.php" class="btn" style="background: orange;color: #fff;    padding: 15px 15px"> Send Delivery </a>

						
					</center>
				</td>
			</tr>

		</table>


		</div>


			
	</div><!-- #wrapper end -->
	<br><br><br><br>

			<?php include 'include/footer.php'; ?>

	

</body>
</html>