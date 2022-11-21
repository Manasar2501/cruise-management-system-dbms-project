
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

		.modal {
  			display: none; /* Hidden by default */
 			position: fixed; /* Stay in place */
  			z-index: 1; /* Sit on top */
  			left: 0;
  			right: 100px;
  			top: 0;
  			width: 100%; /* Full width */
 	 		height: 100%; /* Full height */
  			overflow: auto; /* Enable scroll if needed */
 	 		background-color: rgb(0,0,0); /* Fallback color */
  			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  			padding-top: 60px;
		}

	 input[type=number] [type=text] [type=submit]{
      padding: 12px 20px;
      margin: 8px 0;
      border: 1px solid transparent;
      box-sizing: border-box;
}

button {

  background-color: rgba(0, 0, 0,0.5);
  color: white;
  margin: 8px 0;
  border: solid;
  border-radius: 5px;
  box-shadow:  3px;
  cursor: pointer;
  font-size: 30px;
}

button:hover {
  opacity: 0.8;
}

.container1 {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left:0;
  top:0;
  overflow: auto; /* Enable scroll if needed */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: rgba(0,0,0,50);
  border: 1px solid #888 /* Could be more or less, depending on screen size */
}

.change{
	margin: 0px, 400px;
	padding: 0px, 400px;
}


	form.example input[type=text] {
 		 padding: 10px;
		 font-size: 17px;
		 border: 1px solid grey;
 		 float: left;
  		width: 80%;
  		background: #f1f1f1;
	}

	form.example button {
  		width: 20%;
 		 padding: 10px;
		  background: #2196F3;
		  color: white;
  		size: 17px;
  		border: 1px solid grey;
  		border-left: none;
 		 cursor: pointer;
}

form.example button:hover {
	padding-bottom: 10px;
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

	</style>

	<script type="text/javascript">

		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
		});

   		var modal = document.getElementById('id');
		window.onclick = function(event) {
    	if (event.target == modal) {
        	modal.style.display = "none";
    		}
		}
	
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


					

					<form class="example" action="passenger_search.php" method="POST">
  						<input style="padding-top: 10px;" type="text" placeholder="Search by passenger ID" name="pgr_id">
  						<button type="submit" value="submit"><i class="fa fa-search"></i></button>
					</form><br>

				<?php
					include 'connect.php';

					$sql = "SELECT  b.book_id, b.psgr_id, p.psgr_name, p.psgr_age, p.amt, p.psgr_email, b.cid, c.cruise_type, c.cruise_name FROM bookby b, cruise c, passenger p WHERE b.cid = c.cid AND b.psgr_id = p.psgr_id ORDER  BY book_id;";
					$result = mysqli_query($con,$sql);
				?>

				<?php

				  if (mysqli_num_rows($result) > 0) {

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
							while($row = mysqli_fetch_array($result)) {
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
						echo "No Passengers data is filled";
					}
					?>
				</div>
			</div>        
		</div>
	</div>

	
	<div class ="exit">

		<center>
		<button onclick="document.getElementById('id').style.display='block'" style="cursor: pointer; float: left; margin-left: 18%;">DELETE</button><br>
		</center>

		<center>
		<form action="home_page.php"><button style="color: white; ">BACK</button></form>
	  </center>
	</div>
	


		<div id="id" class="modal">

	  <form class="modal-content animate" action="passenger_delete.php" method="get">
		
    <div class="container1">

    <p>Enter the passenger book id to be deleted.</p>
		<input type="text" placeholder="passenger book ID here" name="book_id" required>
        
    <button type="submit" value="submit">DELETE</button>
    
    </div>

  </form>
</div>
</body>
</html>

