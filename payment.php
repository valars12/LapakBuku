<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	if(isset($_SESSION['user'])){

	}
	else{


	}

	$pdo->close();
    header('location: profile.php');

?>