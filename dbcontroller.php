<?php
include "conf.php";

if ( isset($_GET['logout']) ) {
	session_start();
	session_destroy();
	header("location:index.php");
}

if (isset($_POST['login'])) {
	$uid = $_POST['uid'];
	$password = md5($_POST['pwd']);
	$sql = "SELECT fname,designation FROM users WHERE user_id='$uid' AND password='$password'";
	echo $sql;
	$result = mysqli_query($con,$sql);
	if( !$result ) {
		echo mysqli_error($con);
	}
	else {
		if ( mysqli_num_rows($result) == 1 ) {
			session_start();
			$_SESSION['uid']=$uid;
			$row = mysqli_fetch_array($result);
			$type = $row['designation'];
			$_SESSION['designation']=$type;
			$_SESSION['name']=$row['name'];
			if ( $type == "supervisor" ) {
				header("location:vds.php");
			}
			else if ( $type == "admin" ) {
				header("location:index.php");
			}
		}
		else {
			header("location:index.php");
		}
	}
}

if (isset($_POST['register'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uid = "trio2k19@"+$fname;
	$password = md5($_POST['pwd']);
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$designation = $_POST['designation'];
	$gender = $_POST['gender'];

	$sql = "INSERT INTO users ( user_id, fname, lname, password, designation, email, contact_no, gender) VALUES ( '$uid', $fname','$lname','$password', '$designation', $email',$contact,'$gender')";
	$result = mysqli_query($con,$sql);	
	if( !$result ){
		echo mysqli_error($con);
	}
	else { 
		header("location:index.php");
	}
}

?>