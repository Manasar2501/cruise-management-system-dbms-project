<?php
include "connect.php";

$pid = $_GET['psgr_id'];
$pname = $_GET['psgr_name'];
$page  = $_GET['psgr_age'];
$pemail = $_GET['psgr_email'];
$tdate = $_GET['tr_date'];
$ctype = $_GET['cruise_type'];
$cname = $_GET['cruise_name'];
$amt   = $_GET['amount'];

// getting cruise id from input

switch ($cname) {
    case "carnival breeze":  $cid = "c1";
                            break;
    case "anthem of the sea":  $cid = "c2";
                            break;
    
    case "celebrity":  $cid = "c3";
                            break;

    case "capitals":  $cid = "c4";
                            break;

    case "seabourn":  $cid = "c5";
                            break;
 
    case "regent seven seas":  $cid = "c6";
                            break;

    default:
             break;
}

if ($tdate != date('Y-m-d') && $tdate > date('Y-m-d')) {
 

$sql1 ="INSERT INTO passenger(psgr_id, psgr_name, psgr_age, amt, psgr_email) VALUES ('$pid', '$pname','$page', '$amt', '$pemail');";
mysqli_query($con, $sql1);


$sql2 = "INSERT INTO bookby(psgr_id,cid,trdate) VALUES ('$pid','$cid','$tdate');";
mysqli_query($con, $sql2);

header("Location:passenger_details.php");
}
else
    echo "<center>";
    echo "<h2 style= 'color:red' > Date cannot be less than today. INVALID!!!.... </h2>";
    echo "<a href= 'booking_page.php' style = 'color: black ; border :solid; '> Try again </button>";
    echo "</center>";

?>