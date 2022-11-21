<?php
session_start();
include "connect.php";

// here procedure is used to update the employee new salary and age using the provided ssn

$updatessn = $_GET['ssn_person'];
$newage = $_GET['newage'];
$newsal = $_GET['newsal'];

$sql ="CALL updateEmp('$updatessn', '$newsal', '$newage')";

mysqli_query($con, $sql);

header("Location:employee_details.php");


?>