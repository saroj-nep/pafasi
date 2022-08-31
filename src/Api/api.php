<?php
include "db.php";
if (isset($_SERVER['HTTP_ORIGIN'])) {
	// Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
	// you want to allow, and if so:
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Credentials: true');
	header('Access-Control-Max-Age: 1000');
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
if($action=='login'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="Select * from users where email='$email' AND password= PASSWORD('$password')";
    $result=$conn->query($sql);
    $num=mysqli_num_rows($result);
    if($num > 0){
        $res['message']="Login Successfuly";
       
    }
    else{
        $res['error']=true;
        $res['message']="Your Login email or Password is invalid";
    }
}
if($action=='addusers'){

	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	 
	$sql="INSERT INTO `users`( `email`, `password`) VALUES('$email','$password')";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="User Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}
if($action=='logout'){
	$sql="UPDATE `users` SET `counter`='0',`economy-counter`='0' ,`economy-sum`='0' ,`safety-counter`= '0',`satisfaction-counter`= '0' ,`satisfaction-sum`= '0' ,`time-counter`= '0',`notepad-title`='',`notepad-text`='' WHERE `user-id`='0'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="User logged out Successfully";
		$counter=0;
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}

if($action=='countervariable'){

	
	$economy=$_POST['economy'];
	$safety=$_POST['safety'];
	$satisfaction=$_POST['satisfaction'];
	$time=$_POST['time'];
	
	 
	$sql="UPDATE `users` SET `economy-counter`=`economy-counter`+$economy ,`counter`=`counter`+1 ,`economy-sum`=  `economy-counter`*100/`counter`,  `safety-counter`= `safety-counter`+$safety,`satisfaction-counter`= `satisfaction-counter`+$satisfaction ,`satisfaction-sum`=  `satisfaction-counter`*100/`counter`,`time-counter`= `time-counter`+$time WHERE `user-id`='0'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}
if($action=='facharztvariable'){

	
	
	$satisfaction=$_POST['satisfaction'];
	$time=$_POST['time'];
	
	 
	$sql="UPDATE `users` SET `counter`=`counter`+1 , `satisfaction-counter`= `satisfaction-counter`+$satisfaction ,`satisfaction-sum`=  `satisfaction-counter`*100/`counter`,`time-counter`= `time-counter`+$time WHERE `user-id`='0'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}
if($action=='addnote'){

	
	$notetitle=$_POST['notetitle'];
	$notetext=$_POST['notetext'];
	
	 
	$sql="INSERT INTO `notepad`( `user`,`title`, `text`) VALUES('0','$notetitle','$notetext')";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="Note Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
}

if($action=='getnotes'){
	$sql="SELECT * FROM `notepad`";
	$result=$conn->query($sql);
	$num=mysqli_num_rows($result);
	$userData=array();
	if($num >0){
		while($row=$result->fetch_assoc()){
			array_push($userData,$row);
		}
	
        $res=$userData;

	}else{
		$res['error']=false;
        $res['message']="No Data Found!";
	}
	
}
if($action=='removenote'){

	$notetitle=$_POST['notetitle'];
	$notetext=$_POST['notetext'];

	$sql="DELETE FROM notepad WHERE user=0";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="Note deleted Successfully";
	
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}

if($action=='sendblood'){

	
	$kleines=$_POST['bloodkleines'];
	$grosses=$_POST['bloodgrosses'];
	$gerin=$_POST['bloodgerin'];
	$entz=$_POST["bloodentz"];
	$glucose=$_POST["bloodglucose"];
	$fetts=$_POST["bloodfetts"];
	$eisen=$_POST["bloodeisen"];
	$leber=$_POST["bloodleber"];
	$pankreas=$_POST["bloodpankreas"];
	$niere=$_POST["bloodniere"];
	$elektrolyte=$_POST["bloodelektrolyte"];
	$schild=$_POST["bloodschild"];
     $herz=$_POST["bloodherz"];
	$bvitamin=$_POST["bloodbvitamin"];
	$ldh=$_POST["bloodldh"];
	$harn=$_POST["bloodharn"];
	$psa=$_POST["bloodpsa"];
	$hcg=$_POST["bloodhcg"];
	$serum=$_POST["bloodserum"];
	
	 
	$sql="UPDATE `bluten_options` SET `kleines`=$kleines, `grosses`= $grosses,`gerin`=$gerin, `entz`= $entz,`glucose`=$glucose, `fetts`= $fetts,`eisen`=$eisen, `leber`= $leber,`pankreas`=$pankreas, `niere`= $niere,`elektrolyte`=$elektrolyte, `schild`= $schild,`herz`=$herz, `bvitamin`= $bvitamin,`ldh`=$ldh, `harn`= $harn,`psa`=$psa, `hcg`= $hcg, `serum`= $serum WHERE `user-id`='0'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}

if($action=='getuserinfo'){
	$sql="SELECT * FROM `usersdata`";
	$result=$conn->query($sql);
	$num=mysqli_num_rows($result);
	$userData=array();
	if($num >0){
		while($row=$result->fetch_assoc()){
			array_push($userData,$row);
		}
		$res['error']=false;
        $res['user_Data']=$userData;

	}else{
		$res['error']=false;
        $res['message']="No Data Found!";
	}
	
}


$conn -> close();
header("Content-type: application/json");
echo json_encode($res);
die();
 ?>