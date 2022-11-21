<?php
session_start();
include "connect.php";

$ssn   = $_GET['ssn'];
$efname = $_GET['efname'];
$elname = $_GET['elname'];
$eage  = $_GET['eage'];
$post = $_GET['post'];
$jdate = $_GET['jdate'];
$cid = $_GET['cruise_ID'];
$eemail = $_GET['eemail'];
$sal   = $_GET['sal'];



$sql ="INSERT INTO employee(ssn, emp_fname, emp_lname, emp_age, post_name, jdate, cid, email, sal) VALUES ('$ssn','$efname', '$elname', '$eage', '$post', '$jdate', '$cid', '$eemail', '$sal');";


mysqli_query($con, $sql);




$updatessn = $_GET['ssn_person'];
$newage = $_GET['newage'];
$newsal = $_GET['newsal'];

$sql1 = "UPDATE employee SET sal = '$newsal' , emp_age = '$newage' WHERE ssn ='updatessn';";
mysqli_query($con, $sql1);

header("Location:employee_details.php");

?>