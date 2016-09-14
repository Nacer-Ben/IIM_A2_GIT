<?php session_start();

/********************************
	 DATABASE & FUNCTIONS
********************************/
require('config/config-sample.php');
require('model/functions.fn.php');


/********************************
			PROCESS
********************************/



if(isset($_POST['email']) && isset($_POST['password'])){
	if(!empty($_POST['email']) && !empty($_POST['password'])){

		// TODO

		$cryptPassword = hash("sha256",$_POST['password']);
		// Force user connection to access dashboard
		if (userConnection($db, $_POST['email'], $cryptPassword)== true) {

			header('Location: dashboard.php');
			
		}

		

	}else{
		$error = 'Champs requis !';
	}
}

/********************************
			VIEW
********************************/
include 'view/_header.php';
include 'view/login.php';
include 'view/_footer.php';
