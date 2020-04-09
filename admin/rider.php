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
		<span style="font-size: 25px;">Rider Detail: </span>
		<br>

		<div class="form">
			<table class="table2">
				<tr>
					<br>
					<td> Rider Name: </td><td>Rider Name Full Name</td>
				</tr>

				<tr>
					
					<td> Phone No: </td><td>03001234567</td><td></td>
				</tr>

				<tr>
					
					<td>  Driving Lisence No.: </td><td>23454-99887-52</td><td></td>
				</tr>

				<tr>
					
					<td> Rider Imgae:</td><td colspan="1"> <img class="form-control" src="images/riders/dp1.png" style="width: 220px;height: 200px;"> </td><td></td>
				</tr>


				<tr>
					
					<td colspan="3">
	


					</td>
				</tr>
					<td colspan="3">
	
					<a href="riders.php" class="btn" style="background: orange;color: #fff;    padding: 15px 15px;" > View All Riders </a>

					</td>
				</tr>



			</table>


			
	</div><!-- #wrapper end -->
	<br><br><br><br><br><br>

			<?php include 'include/footer.php'; ?>

	

</body>
</html>