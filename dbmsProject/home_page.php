<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Moo+Lah+Lah&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
	<style>
		*{
			margin:0;
			padding: 0;
			user-select: none;
			box-sizing: border-box;
			font-family: Arial, Helvetica, sans-serif;
			color: white;
		}
		.sidebar{
			position:fixed ;
			background-color: rgb(0, 0, 0,);
			width: 250px;
			height: 100%;
			left: -250px;
			color: rgb(255, 255, 255);
		}
		.sidebar .text{
			color: black;	
			font-size: 30px;
			font-weight: 600;
			line-height: 65px;
			text-align: center;
			background-color: rgb(0, 0, 0,0.25) ;
			letter-spacing: 1.5px;
			transition: left 0.4s ease;
		}
		nav ul{
			background-color: rgb(0, 0, 0,0.1);
			height: 100%;
			width:100%;
			list-style: none;
		}
		nav ul li{
			line-height: 40px;
			border-bottom: 1px solid;
			border-bottom: 1px solid rgb(255, 255, 255);
		}
		nav ul li a{
			color: black;
			text-decoration: none;
			font-size: 20px;
			padding-left: 50px;
			display:block;
			width: 100px;
		}
		nav ul li a:hover{
			color:rgb(255, 255, 255);
			border-left: 2px solid black;
		}
		nav ul li:last-child{
			border-bottom: 5px solid rgb(255, 255, 255);
		}
		.btn{
			margin-top: 100px;
			position: absolute;
			top: 15px;
			left: 4px;
			height: 45px;
			width: 45px;
			background-color: #1b1b1b;
			text-align: center;
			border-radius: 4px;
			cursor: pointer;
			transition: left 0.4s ease;
		}
		.btn.click{
			left: 270px;
		}
		.btn.click span:before{
			content:'\f00d';

		}
		.btn span{
			color: white;
			font-size: 20px;
			line-height: 45px;
		}
		.sidebar.show{
			left:0px;
		}
		h1{
			font-family: 'Moo Lah Lah', cursive; font-size: 100px; font-family: 'Tangerine', cursive;
			color: black; text-align: center;
		}
	.background-image {
		background-image: url("https://thumbs.dreamstime.com/z/summer-holiday-italy-back-view-young-woman-holding-her-hat-sorrento-peninsula-harbor-background-summer-159381748.jpg");
   		background-size: cover;
 		background-repeat: no-repeat;
  		height:100vh;
	}
	</style>

	<script src = "https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>home</title>
</head>
<body>
	<h1>Cruise System</h1>
	<div class="background-image">
	<div class="btn">
		<span class="fas fa-bars"></span>
	</div>
	<nav class="sidebar">
		<div class="text">SIDE MENU</div>
		<ul>
			<li><a href="home_page.php">home</a></li>			
			<li><a href="service_page.php">Service</a></li>
			<li><a href="employee_details.php">employee</a></li>			
			<li><a href="passenger_details.php">Traveller</a></li>	
			<li><a href="booking_page.php">Booking</a></li>			
			<li><a href="login_page.php">Logout</a></li>		
		</ul>
	</nav>
    </div>
	<script>
		$(".btn").click(function(){
			$(this).toggleClass("click");
			$(".sidebar").toggleClass("show");
		});
	</script>
</body>
</html>