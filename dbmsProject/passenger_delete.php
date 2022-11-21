<?php
session_start();
include "connect.php";

// here procedure is used to update the employee new salary and age using the provided ssn

$deletebid = $_GET['book_id'];


$sql ="DELETE FROM bookby WHERE book_id ='$deletebid';";
mysqli_query($con, $sql);

header("Location:passenger_details.php");


?>
<!-- $sql1 ="INSERT INTO passenger(psgr_id, psgr_name, psgr_age, amt, psgr_email) VALUES ('$pid', '$pname','$page', '$amt', '$pemail');";
mysqli_query($con, $sql1); -->

<!-- DROP TRIGGER IF EXISTS `insert`;CREATE DEFINER=`root`@`localhost` TRIGGER `insert` AFTER DELETE ON `bookby` FOR EACH ROW insert into deletebid (book_id) select book_id from bookby b, deletebid d where d.book_id = b.book_id;
	DROP TRIGGER IF EXISTS `insert`;CREATE DEFINER=`root`@`localhost` TRIGGER `update` AFTER DELETE ON `deletebid` FOR EACH ROW insert into deletebid (book_id) select book_id from bookby b, deletebid d where book_id = b.book_id





	CREATE TRIGGER `update` AFTER DELETE ON `deletebid` FOR EACH ROW insert into deletebid (book_id) select book_id from bookby b, deletebid d where book_id = b.book_id;
 -->