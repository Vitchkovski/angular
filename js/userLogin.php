<?php 

$data = json_decode(file_get_contents("php://input"));

include('database.php');

$db = new DB();

   /* $escaped_email = mysqli_real_escape_string($data->email);
    
    $escaped_login = mysqli_real_escape_string($data->login);*/
    
    $hashed_pass = hash( 'sha512', $data->pass );
    
    $select = "select * from users where login = '$data->login' and email = '$data->email' and password = %s')";
    
    $sql = sprintf($select, $hashed_pass);
    
   $data = $db->qrySelect($sql);

	echo json_encode($data);
    