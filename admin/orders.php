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
		<span style="font-size: 25px;"> Orders: </span>
		<br><br>

<div id="accordion">
    <div class="card card-link" data-toggle="collapse" href="#collapseOne">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
        <span style="float: right;" ><i class="icon-clock"> </i></span>  

          Pending Orders:
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
          


		<table class="table2 " style="padding: 1px !important;">

			<tr class="riderow">
				<td style="max-width:;">
				 <span> Order# </span><br> 
				 <span> 9908 </span> 
				</td>
				<td style="width: 60%">
				<div style="text-align: left;">
					<a href="assignorder.php" ><span style="font-size: 18px;"> Order Name </span> </a><br>
					<span>Full Address, Area, City</span>
				</div>
				</td>
				<td style="max-width:;">
				 <span> Price: </span><br> 
				 <span> Rs. 10,500/- </span> 
				</td>
			</tr>


		</table>





        </div>
      </div>
    </div>
    <div class="card">
      	<div class="card-header collapsed card-link" data-toggle="collapse" href="#collapseTwo">

        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        <span style="float: right;" ><i class="icon-road"> </i></span> EnRoute Orders 
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
               <div class="card-body">

		<table class="table2 " style="padding: 1px !important;">

			<tr class="riderow">
				<td style="max-width:;">
				 <span> Order# </span><br> 
				 <span> 9908 </span> 
				</td>
				<td style="width: 60%">
				<div style="text-align: left;">
					<a href="vieworder.php" ><span style="font-size: 18px;">Complete Order Name </span> </a><br>
					<span> Rider: <a href="rider.php">New Rider </a> </span>
				</div>
				</td>
				<td style="max-width:;">
				 <span> Price: </span><br> 
				 <span> Rs. 10,500/- </span> 
				</td>
			</tr>
			<tr>
				<td colspan="3"> Started At: 2020-03-05 15:53:40
				</td> 
			</tr>


			<tr class="riderow">
				<td style="max-width:;">
				 <span> Order# </span><br> 
				 <span> 9908 </span> 
				</td>
				<td style="width: 60%">
				<div style="text-align: left;">
					<a href="vieworder.php" ><span style="font-size: 18px;">Complete Order Name </span> </a><br>
					<span> Rider: <a href="rider.php">New Rider </a> </span>
				</div>
				</td>
				<td style="max-width:;">
				 <span> Price: </span><br> 
				 <span> Rs. 10,500/- </span> 
				</td>
			</tr>
			<tr>
				<td colspan="3"> Started At: 2020-03-05 15:53:40
				</td> 
			</tr>



		</table>
	</div>




      </div>
    </div>
    <div class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                  <span style="float: right;" ><i class="icon-ok"> </i></span>  
				Completed Orders:
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">


		<table class="table2 " style="padding: 1px !important;">

			<tr class="riderow">
				<td style="max-width:;">
				 <span> Order# </span><br> 
				 <span> 9908 </span> 
				</td>
				<td style="width: 70%">
				<div style="text-align: left;">
					<a href="vieworder.php" ><span style="font-size: 18px;">Completed Order </span> </a><br>
					<span> Full Complete Address,  <a href="rider.php">New Rider </a> </span><br>

				 <span> Price: </span>
				 <span> Rs. 10,500/- </span> 

				</div>
				</td>
				<td style="max-width:;">
					<i style="color: orange" class="icon-ok-sign"></i> 
				</td>
			</tr>
			<tr>
				<td colspan="3"><span> Started: 03-05 15:53:40  | Completed: 03-05 15:53:40  </span>
				</td> 
			</tr>



		</table>
        </div>
      </div>
    </div>
  </div>
<br><br>
    <center>
    	<a class="neworder" href="neworder.php"> <i class="icon-plus"></i> Add New Order </a>
    </center>


			
	</div><!-- #wrapper end -->
	<br><br><br><br><br><br>

			<?php include 'include/footer.php'; ?>

	

</body>
</html>