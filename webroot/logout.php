<?php
require_once '../lib/config/const.php';
{
	session_start();
	$_SESSION = array();
	$params = session_get_cookie_params();
	setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
			);
	session_destroy();
	session_regenerate_id(true);
	header('Location: ./top.php');
}
