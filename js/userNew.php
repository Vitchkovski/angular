<?php 

$data = json_decode(file_get_contents("php://input"));

include('database.php');

$db = new DB();

   /* $escaped_email = mysqli_real_escape_string($data->email);
    
    $escaped_login = mysqli_real_escape_string($data->login);*/
    
    $hashed_pass = hash( 'sha512', $data->pass );
    
    $insert = "insert into users (login, email, password) values ('$data->login', '$data->email', '%s')";
    
    $sql = sprintf($insert, $hashed_pass);
    
   $db->qryFire($sql);

	//echo json_encode($data);
    

