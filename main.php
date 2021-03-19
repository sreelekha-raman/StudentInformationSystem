<?php 

if (isset($_POST['submit'])) {

$con = mysqli_connect('localhost','root','','sis');

$first_name = $_POST['fn'];
$last_name = $_POST['ln'];
$session = $_POST['session'];
$roll = $_POST['rollno'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$sem = $_POST['sem'];
$dob = $_POST['dob'];
$add = $_POST['add'];

session_start();

$_SESSION['data'] = $roll;

$sql = "INSERT INTO students (first_name,last_name,session,reg_no,branch,year,semester,dob,address) VALUES ('$first_name','$last_name','$session','$roll','$branch','$year','$sem','$dob','$add')";
	if(mysqli_query($con,$sql)){
		echo " Successfull";
	}else{
		echo"error";
	}

}
 ?>