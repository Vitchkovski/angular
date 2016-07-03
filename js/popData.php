<?php
	include('database.php');

	$db = new DB();

	$data = $db->qryFire();

	echo json_encode($data);