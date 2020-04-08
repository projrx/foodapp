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
		<span style="font-size: 25px;">New Rider: </span>
		<br>

		<div class="form">
			<table class="table2">
				<tr>
					<br>
					<td> Rider Name: </td><td><input class="form-control" type="text" name=""></td><td><div style="min-width: 10px;"></td>
				</tr>

				<tr>
					
					<td> Phone No: </td><td><input class="form-control" type="text" name=""></td><td></td>
				</tr>

				<tr>
					
					<td>  Lisence No.: </td><td><input class="form-control" type="text" name=""></td><td></td>
				</tr>

				<tr>
					
					<td> Rider Imgae:</td><td colspan="1"> <input type="file" class="form-control" name=""> </td><td></td>
				</tr>


				<tr>
					
					<td colspan="3">
	


					</td>
				</tr>
					<td colspan="3">
	
					<a href="home.php" class="btn" style="background: orange;color: #fff;    padding: 15px 15px;" > Add Rider </a>

					</td>
				</tr>



			</table>


			
	</div><!-- #wrapper end -->
	<br><br><br><br><br><br>

			<?php include 'include/footer.php'; ?>

	

</body>
</html>