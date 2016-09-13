<?php
require('config/config-sample.php');
require('model/functions.fn.php');
session_start();

if(	isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) &&
	!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {

	// TODO

	userRegistration($db, $_POST['username'], $_POST['email'], $_POST['password']);
	header('Location: login.php');
	
}else{
	$_SESSION['message'] = 'Erreur : Formulaire incomplet';
	header('Location: register.php');
}
