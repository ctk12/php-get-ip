<?php  
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// echo $_SERVER['HTTP_X_FORWARDED_FOR'];

echo json_encode($_SERVER['HTTP_X_FORWARDED_FOR']);

?>