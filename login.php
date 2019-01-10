<?php
header("Access-Control-Allow-Origin:http://10.30.29.63:63341");
header("Access-Control-Allow-Credentials:true");
header('Access-Control-Allow-Headers:Content-Type');

$str=file_get_contents('php://input');
$username=json_decode($str)->userName;
$password=json_decode($str)->passWord;

if($username=="123"&& $password=="123")
{
    $data=array("message"=>"success");
    session_start();
    $_SESSION['views']=1;
}
else{
    $data=Array("message"=>"error");
}
echo json_encode($data);
?>