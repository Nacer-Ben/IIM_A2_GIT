<?php
require('config/config-sample.php');
require('model/functions.fn.php');
session_start();

if(	isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) &&
	!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	// TODO
	$password = $_POST['password'];
	$cryptPassword = hash("sha256", $password);
	userRegistration($db, $_POST['username'], $_POST['email'], $cryptPassword);
	header('Location: login.php');
	
}else{
	$_SESSION['message'] = 'Erreur : Formulaire incomplet';
	header('Location: register.php');
}
