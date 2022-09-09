<?php
include "db.php";
if (isset($_SERVER['HTTP_ORIGIN'])) {
	// Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
	// you want to allow, and if so:
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Max-Age: 1000');
	header('Content-type:application/json;charset=utf-8');
}
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) {
			// may also be using PUT, PATCH, HEAD etc
			header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
	}

	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
			header("Access-Control-Allow-Headers: Accept, Content-Type, Content-Length, Accept-Encoding, X-CSRF-Token, Authorization");
	}
	exit(0);
}

$res = array('error' => false);
$action='';


if (isset($_GET['action'])) {
	
	$action=$_GET['action'];
}


if($action=='countervariable'){

	
	$economy=$_POST['economy'];
	$safety=$_POST['safety'];
	$satisfaction=$_POST['satisfaction'];
	$time=$_POST['time'];
	$step=$_POST['step'];
	$steptime=date('Y-m-d H:i:s');
	$stepandtime=$step.' um '.$steptime.'.';
	 
	$sql="UPDATE `users` SET `economy-counter`=`economy-counter`+$economy ,`counter`=`counter`+1 ,`economy-sum`=  `economy-counter`*100/`counter`,  `safety-counter`= (`safety-counter`+$safety),`safety-sum` = `safety-counter`/ `counter`,`satisfaction-counter`= `satisfaction-counter`+$satisfaction ,`satisfaction-sum`=  `satisfaction-counter`*100/`counter`,`time-counter`= `time-counter`+$time WHERE `user-id`='0'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

	$sql="UPDATE `user_history` SET `steps`=CONCAT(`steps`,+'','$stepandtime')  WHERE `user`='0'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}

$conn -> close();
header("Content-type: application/json");
echo json_encode($res);
die();
 ?>