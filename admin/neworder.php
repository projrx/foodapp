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
			width: 100%
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



	<div  class="container" style="padding-left: 10px !important;    padding-right: 10px !important;">
		<br>
		<span style="font-size: 25px;">Add New  Orders: </span>
		<br>

		<div class="form">
			<table class="table2">
				<tr>
					<br>
					<td> Order Name: </td><td><input class="form-control" type="text" name=""></td><td><div style="min-width: 20px;"></td>
				</tr>

				<tr>
					
					<td> Price: </td><td><input class="form-control" type="text" name=""></td><td></td>
				</tr>

				<tr>
					
					<td> Invoice: </td><td><input class="form-control" type="file" name=""></td><td></td>
				</tr>

				<tr>
					
					<td>  Address: </td><td><input class="form-control" type="text" name=""></td><td></td>
				</tr>

				<tr>
					
					<td>  Zone: </td><td>

						<select class="form-control">
						<option> Zone Area - 5 AED</option>
						<option> New Zone Area - 8 AED</option>
						<option> Another Area - 6 AED</option>

					</select>
					</td><td></td>
				</tr>

				<tr>
					
					<td> Select Location:</td><td colspan="2"></td>
				</tr>


				<tr>
					
					<td colspan="3">
						
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d27197.220145527084!2d74.29954835239259!3d31.561149593640643!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe794b7167799aa1a!2sChauburji!5e0!3m2!1sen!2s!4v1586354210910!5m2!1sen!2s" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



					</td>
				</tr>
					<td colspan="3">
	
					<a href="home.php" class="btn" style="background: orange;color: #fff;    padding: 15px 15px;
}" > Add Order </a>

					</td>
				</tr>



			</table>


			
	</div><!-- #wrapper end -->
	<br><br><br><br><br><br>

			<?php include 'include/footer.php'; ?>

	

</body>
</html>