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
			border: none !important
		}
		span{
			font-size: 16px;
			text-align: center;
		}
		table{
			border: none

		}
		tr{
			border: none
		}
		.mybtn{
			background: #ffa500;
			color:#fff;
			font-size: 18px;
			padding: 13px 20px;
    		border-radius: 2px;
	}		
	.form-control{
			width: 85% !important;
		}
	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div class="container">

		<div class="text-center"  style="background: #ffa500">
			<img style="width: 200px;" src="images/logowhite.png"></div>
			<br><br>
			

		</div>


		<div class="login" style="">
			<br><br><br>
			<br><br><br>
		<center>

			<h3>Admin Login</h3>
		</center>

		<form>
			<table class="table" style="vertical-align: middle;">
				<tr>
					<td> <span> Username: </span> </td>
					<td> <input type="username" class="form-control" type="" name=""> </td>
				</tr>
				<tr>
					<td> <span> Password: </span> </td>
					<td> <input type="Password" class="form-control" type="" name=""> </td>
				</tr>

				<tr>
					<td colspan="2">
						<br>
						<a  href="home.php" name="" class="btn mybtn">Sign In </a>
					</td>
				</tr>
			</table>




			
	</div><!-- #wrapper end -->


		<!-- External JavaScripts
	============================================= -->
	<script src="../js/jquery.js"></script>
	<script src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="../js/functions.js"></script>
	

</body>
</html>