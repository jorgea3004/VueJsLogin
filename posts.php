<?php
$request = json_decode(file_get_contents('php://input')); 
$user = $request->user;
$pass = $request->pass;
if(isset($user) && strlen($user)>0 && isset($pass) && strlen($pass)>0 ){
	$return = 'Usuario aceptado';
} else {
	$return = 'Usuario NO aceptado';
}
$status["json"] = json_encode($return);
echo json_encode($status);

?>