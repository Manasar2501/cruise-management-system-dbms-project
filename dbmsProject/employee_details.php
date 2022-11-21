
<!DOCTYPE html>
<html lang="en">
<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title></title>
		<link rel="stylesheet" href="employee_details.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	   
    

	<script type="text/javascript">
   		var modal = document.getElementById('id01');
		window.onclick = function(event) {
    	if (event.target == modal) {
        	modal.style.display = "none";
    		}
		}
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
						<h1 class="pull-left" style="text-align: center; font-size: 30px;">EMPLOYEE DATA</h1>
					</div>

				<?php
					include 'connect.php';
					session_start();

					$sql = "SELECT * FROM employee;";
					$result = mysqli_query($con,$sql);
				?>

				<?php

				  if (mysqli_num_rows($result) > 0) {

				?>
				<table class='table table-bordered table-striped'>
					<tr>
					<td>SSN</td>
					<td>Employee first name</td>
					<td>Employee last name</td>
					<td>Employee age</td>
					<td>post Name</td>
					<td>join date</td>
					<td>cruise ID</td>
					<td>Employee E-mail</td>
					<td>Employee Salary</td>

					</tr>
					<?php
						$i=0;
							while($row = mysqli_fetch_array($result)) {
					?>
					<tr>
					<td><?php echo $row["ssn"]; ?></td>
					<td><?php echo $row["emp_fname"]; ?></td>
					<td><?php echo $row["emp_lname"]; ?></td>
					<td><?php echo $row["emp_age"]; ?></td>
					<td><?php echo $row["post_name"]; ?></td>
					<td><?php echo $row["jdate"]; ?></td>
					<td><?php echo $row["cid"]; ?></td>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["sal"]; ?></td><br>
					</tr>

					<?php
						$i++;
					}
					?>

					</table>
					<?php
						}
					else{
						echo "No Employee data is filled";
					}
					?>
				</div>
			</div>        
		</div>
	</div>
	


	<center>
	<div class ="exit">
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">ADD</button>

	<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">update</button>

		<form action="home_page.php"><button style="height: 40px;">BACK</button></form>
	</div>
	</center>	
	
		
	<div id="id01" class="modal">

	<form class="modal-content animate" action="employee_insert.php" method="get">
		
    <div class="container1">
      <input type="text" placeholder="Enter SSN" name="ssn" required>
     

    <input type="text" placeholder="Employee first Name" name="efname" required>
   
    <input type="text" placeholder="Employee last Name" name="elname" required>

    <input type="number" placeholder="Employee age" name="eage" required>
    <div class = "error"></div>

    <input type="text" placeholder="Employee post" name="post" required>
    <div class = "error"></div>

    <input type="date" placeholder="join date" name="jdate" required>
    <br>

    <label for="cruise_ID" style="margin: 20px;"> cruise type</label><br>
     <select name = "cruise_ID" id = "cruise_ID" style="margin: 20px; width:150px">
                    <option selected value="" disabled selected></option>
                    <option value = "c1">c1</option>
                    <option value = "c2">c2</option>
                    <option value = "c3">c3</option>
                    <option value = "c4">c4</option>
                    <option value = "c5">c5</option>
                    <option value = "c6">c6</option>
     </select>
     <br>

    <input type="email" placeholder="Employee E-mail" name="eemail" required>
    <div class = "error"></div>

    <input type="number" placeholder="Employee Salary" name="sal" required>
    <div class = "error"></div>
        
    <button type="submit" value="submit">Add</button>
    
    
    </div>

  </form>
</div>

<div id="id02" class="modal">

	<form class="modal-content animate" action="emp_update.php" method="get">
		
    <div class="container1">

    <p>Enter the employee ssn who needs to  update. Update the following details.</p>
		<input type="text" placeholder="Employee ssn" name="ssn_person" required>
		<div class = "error"></div>

    <input type="number" placeholder="Employee age" name="newage" required>
    <div class = "error"></div>

    <input type="number" placeholder="Employee Salary" name="newsal" required>
  
        
    <button type="submit" value="submit">Update</button>
    
    
    </div>

  </form>
</div>


</body>
</html>

