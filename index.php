<?php
session_start();
include "header.php";
include "nav.php";
if ( !isset($_SESSION['uid']) ) {
	include "login.php";
	include "signup.php";
}
include "feedback.php";
include "footer.php";
?>