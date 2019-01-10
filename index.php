
<?php
header("Access-Control-Allow-Origin : http://10.30.29.63:63341");
header("Access-Control-Allow-Credentials : true");
header('Access-Control-Allow-Headers : Content-Type');


$data=array("userName"=>"456");
echo json_encode($data);
?>