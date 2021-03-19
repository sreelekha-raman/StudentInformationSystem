<?php 
session_start();
$reg = $_SESSION['data'];
if (isset($_POST['submit'])) {

$con = mysqli_connect('localhost','root','','sis');

$first_name = $_POST['fn'];
$last_name = $_POST['ln'];
$dob = $_POST['dob'];
$add = $_POST['add'];

$sql = "UPDATE students SET first_name='$first_name',last_name='$last_name',dob='$dob',address='$add' where reg_no = '$reg'";
	if(mysqli_query($con,$sql)){
		echo " Successfull";
	}else{
		echo "error";
	}
}
 ?>