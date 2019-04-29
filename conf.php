<?php
$con = mysqli_connect("localhost","root","","vds");
if (!$con) {
	die('Could not connect: ' . mysqli_error($con));
}
?>