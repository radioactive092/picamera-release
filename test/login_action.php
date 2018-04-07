<?php
	$params = array();
	$params['USERNAME'] = '';
	$params['PASSWORD'] = '';
	
	if(isset($_POST['submit'])) {
		if(isset($_POST['username'])) {
			$params['USERNAME'] = $_POST['username'];
		}
		if(isset($_POST['password'])) {
			$params['PASSWORD'] = $_POST['password'];
		}
		
		
		
		if('' != $params['USERNAME'] && '' != $params['PASSWORD']) {
			$_SESSION['username'] = $params['USERNAME'];
			$_SESSION['userid'] = '1';
		}
	}
?>
