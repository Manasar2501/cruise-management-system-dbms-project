<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        *{
            margin:20px;padding: 0;
        }

        .grid-container {
         display: grid;
        grid-template-columns: auto auto auto;
        background: transparent;
        padding: 2px;
      }

      .port-info{
        background: rgba(0, 0, 0, 0.25);  box-shadow: 0 0 17px #333;
        color: white;
        border: 3px solid rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        padding: 20px;
      }

     .name{
        text-align: center;
        font-size: 40px;
        background-color: rgba(0, 0, 0, 0.54);
     }

    .background-img{
        background-image: url("https://www.cruisespecialists.com/blogs/wp-content/uploads/2020/02/200464-Oceania-RoomService-2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        height:150vh;
    }

    .home button
    {
        width: 159px;height: 40px;
        border: 2px solid black;
        text-align: center;
        font-size: 30px;
        color: white;
        border-radius: 4px;
        background-color: rgba(0, 0, 0,0.75);
        box-shadow: 0 0 17px #333;
    }

    .heading{
        font-family: 'Abril Fatface', cursive;
        letter-spacing: 5px;
        background: radial-gradient(black, white);
        color: white;
        padding: 10px;
        font-size: 50px;
    }

    a{color: white; font-size: 30px;}

    
    .bs-example{
        margin: 20px;
    }

    .table table-bordered table-striped{
        border: 10px;
    }

    .link-to-booking{
        width: 300px;
        background-color: black;
    }
                
    </style>

        <script type="text/javascript">

        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

</head>
<body>
     <h1 class="heading" style="text-align: center;">SERVICE</h1>
    <div  class="background-img">
    <div class="grid-container">
        
    
    <div class="port-info"><h1 id class="name" >COZUMEL</h1>
        <p>Main Attraction—Diving and Snorkeling.Cozumel is ripe for one-of-a-kind adventures. Cruise to Cozumel and head to Chankanaab National Park, where you can snorkel among the colorful reefs and schools of tropical fish that give this island its premier diving status. 
    </p>
    </div>
    <div class="port-info">
        <h1 id class="name" >PROGRESSO</h1>
        <P>
            Progreso (Yucatan), Mexico cruise ship calendar 2022 provides the opportunity to search arrival and departure schedules of cruise ships arriving in port. 
        </P>
    </div>

    <div class="port-info">
        <h1 id class="name">CALICA</h1>
        <p>
            Calica is a Mexican quarry and port that is the primary docking spot for Playa del Carmen, a wonderfully tropical spot for vacations and getaways. 
        </p>
    </div> 
    </div>
    <div class="grid-container">
    
        <div class="port-info"><h1 id class="name">LUXURY</h1>
            <h2>cruise name</h2>
            <ul>
                <li>Seabourn</li>
                <li>Regent Seven Seas</li>
            </ul>
            <h2>facilities</h2>
            <ul>
            <li>plenty of elbow room</li>
            <li>services are solicitous and refined</li>
            <li>fine dining by top chef's</li>
            <li>cost as the sky is the limit</li>
            <div class = "link-to-booking">
            <center>
            <p> RS.10000 </p>
            <form action = "booking_page.php"><input type=submit value = "BOOK NOW"></form></center>
            </div>
            </ul>            
    
        </div>
        <div class="port-info">
            <h1 id class="name">PREMIUM</h1>
           <h2>cruise name</h2>
           <ul>
            <li>celebrity</li>
            <li>capitals</li>
        </ul>
        <h2>facilities</h2>
        <ul>
            <li>full yet comfortable</li>
            <li>services are prompt and efficient</li>
            <li>good resturant , food cooked to order</li>
            <li>cost are few dollars more</li>
            <div class = "link-to-booking">
            <center>
            <p> RS.6500 </p>
            <form action = "booking_page.php"><input type=submit value = "BOOK NOW"></form></center>
            </div>
        </ul>
        </div>
    
        <div class="port-info">
            <h1 id class="name">MAINSTREAM</h1>
            <h2>Cruise Names</h2>
            <ul>
                <li>carnival Breeze</li> 
                <li>Anthem of the sea</li>
            </ul>
            <h2>facilities</h2>
            <ul>
                <li>busy and crowed</li>
                <li>Services are rarely personal</li>
                <li>Food quality is ample buffet-quality </li>
                <div class = "link-to-booking">
                <center>
                <p> RS.5000 </p>
                <form action = "booking_page.php"><input type=submit value = "BOOK NOW" ></form></center>
                </div>
            </ul>  
        </div> 
        </div>
</div>
</div>


<div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h1 class="pull-left" style="text-align: center;">CRUISE DETAILS</h1>
                    </div>

                <?php
                    include 'connect.php';

                    $sql = "SELECT l.cid, c.cruise_name, c.cruise_type, l.port_id, p.port_name, l.city FROM location l, cruise c, port p WHERE l.cid = c.cid and l.port_id = p.port_id order by cid;";
                    $result = mysqli_query($con,$sql);
                ?>

                <?php

                  if (mysqli_num_rows($result) > 0) {

                ?>
                <table class='table table-bordered table-striped'>
                    <tr>
                    <td>Cruise ID</td>
                    <td>Cruise Type</td>
                    <td>Port ID</td>
                    <td>Port Name</td>
                    <td>City</td>
                    </tr>
                    <?php
                        $i=0;
                            while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                    <td><?php echo $row["cid"]; ?></td>
                    <td><?php echo $row["cruise_name"]; ?></td>
                    <td><?php echo $row["cruise_type"]; ?></td>
                    <td><?php echo $row["port_name"]; ?></td>
                    <td><?php echo $row["city"]; ?></td>
                    </tr>

                    <?php
                        $i++;
                    }
                    ?>

                    </table>
                    <?php
                        }
                    else{
                        echo "No result found";
                    }
                    ?>
                </div>
            </div>        
        </div>
    </div>

<center><div class="home"><form action="home_page.php"><button >Home</button></form></div></center>

</body>
</html>