
<!DOCTYPE html>
<html lang="en">
<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title></title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">

	*{
		box-sizing: border-box;
	}

    .bs-example{
		margin: 20px;
	}

	.table table-bordered table-striped{
		border: 1px;
	}

	.exit button{
		width: 150px; height: 50px;
		color: white; border : 2px solid black; border-radius: 4px; background:rgba(0, 0, 0, 0.85); font-size: 30px;
		}

	</style>

	<script type="text/javascript">

		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
		});
	</script>

</head>

<body>
	<div class="bs-example">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-header clearfix">
						<h1 class="pull-left" style="text-align: center;">TRAVELLERS DATA</h1>
					</div> 				

					<?php
						include 'connect.php';
						session_start();

						$pid = $_POST['pgr_id'];

						$searchsql = "SELECT  b.book_id, b.psgr_id, p.psgr_name, p.psgr_age, p.amt, p.psgr_email, b.cid, c.cruise_type, c.cruise_name FROM bookby b, cruise c, passenger p WHERE b.cid = c.cid AND b.psgr_id = p.psgr_id AND p.psgr_id = '$pid' ORDER BY book_id ;";
						$sqlresult = mysqli_query($con,$searchsql);
					?>

					<?php

				  		if (mysqli_num_rows($sqlresult) > 0) {

					?>
					<table class='table table-bordered table-striped'>
					<tr>
					<td>Book ID</td>
					<td>passenger ID</td>
					<td>passenger name</td>
					<td>passenger age</td>
					<td>passenger E-mail</td>
					<td>amount paid</td>
					<td>cruise ID</td>
					<td>cruise Type</td>
					<td>cruise name</td>

					</tr>
					<?php
						$i=0;
							while($row = mysqli_fetch_array($sqlresult)) {
					?>
					<tr>
					<td><?php echo $row["book_id"]; ?></td>
					<td><?php echo $row["psgr_id"]; ?></td>
					<td><?php echo $row["psgr_name"]; ?></td>
					<td><?php echo $row["psgr_age"]; ?></td>
					<td><?php echo $row["psgr_email"]; ?></td>
					<td><?php echo $row["amt"]; ?></td>
					<td><?php echo $row["cid"]; ?></td>
					<td><?php echo $row["cruise_type"]; ?></td>
					<td><?php echo $row["cruise_name"]; ?></td>

					</tr>

					<?php
						$i++;
					}
					?>

					</table>
					<?php
						}
					else{
						echo "No Passengers by the name";
					}
					?>
					</div>
			</div>        
		</div>
	</div>
	<center>
	<div class ="exit">
		<form action="passenger_details.php"><button style="color: white; ">BACK</button></form>
	</div>
	</center>
</body>
</html>
