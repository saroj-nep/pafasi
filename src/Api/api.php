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
if($action=='online'){
    $email=$_POST['email'];
	$logintime=date('Y-m-d H:i:s');

    $sql="INSERT INTO `onlineusers`( `email`, `logintime`) VALUES('$email', '$logintime')";
    $result=$conn->query($sql);
    $num=mysqli_num_rows($result);
	
}
if($action=='logout'){
 
	$onlineuser=$_POST['onlineuser'];

	$sql="DELETE FROM onlineusers WHERE email='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="User removed Successfully";
	
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}



// 	$sql="UPDATE `users` SET `counter`='0',`economy-counter`='0' ,`economy-sum`='0' ,`safety-counter`= '0',`safety-sum`= '0',`satisfaction-counter`= '0' ,`satisfaction-sum`= '0' ,`time-counter`= '0',`notepad-title`='',`notepad-text`='' WHERE `user-id`='0'";
// 	$result=$conn->query($sql);
// 	if($result===true){
// 		$res['error']=false;
//         $res['message']="User logged out Successfully";
// 		$counter=0;
// 	}else{
// 		$res['error']=true;
//         $res['message']="Somthing Went Wrong";
// 	}
// 	$sql="DELETE FROM notepad WHERE user=0";
// 	$result=$conn->query($sql);
// 	if($result===true){
// 		$res['error']=false;
//         $res['message']="Note deleted Successfully";
	
// 	}else{
// 		$res['error']=true;
//         $res['message']="Somthing Went Wrong";
// 	}
// $sql="UPDATE `bluten_options` SET `kleines`=0, `grosses`= 0,`gerin`=0, `entz`= 0,`glucose`=0, `fetts`= 0,`eisen`=0, `leber`= 0,`pankreas`=0, `niere`= 0,`elektrolyte`=0, `schild`= 0,`herz`=0, `bvitamin`= 0,`ldh`=0, `harn`= 0,`psa`=0, `hcg`= 0, `serum`= 0 WHERE `user-id`='0'";
// 	$result=$conn->query($sql);
// 	if($result===true){
// 		$res['error']=false;
//         $res['message']="variables Added Successfully";
// 	}else{
// 		$res['error']=true;
//         $res['message']="Somthing Went Wrong";
// 	}

// 	$sql="UPDATE `urin_options` SET `stix`=0, `sediment`= 0, `kultur`= 0 WHERE `user`='0'";
// 	$result=$conn->query($sql);
// 	if($result===true){
// 		$res['error']=false;
//         $res['message']="variables Added Successfully";
// 	}else{
// 		$res['error']=true;
//         $res['message']="Somthing Went Wrong";
// 	}

// 	$sql="UPDATE `stuhl_options` SET `probe`=0, `kultur`= 0, `untersuchung`= 0 WHERE `user`='0'";
// 	$result=$conn->query($sql);
// 	if($result===true){
// 		$res['error']=false;
//         $res['message']="variables Added Successfully";
// 	}else{
// 		$res['error']=true;
//         $res['message']="Somthing Went Wrong";
// 	}
}
if($action=='emptydiagnosis'){
 

$onlineuser=$_POST['onlineuser'];
	$sql="UPDATE `users` SET `counter`='0',`economy-counter`='0' ,`economy-sum`='0' ,`safety-counter`= '0',`safety-counter2`= '0',`safety-counter3`= '0',`safety-sum`= '0',`satisfaction-counter`= '0' ,`satisfaction-sum`= '0' ,`time-counter`= '0',`counter-safety`='0',`counter-safety2`='0',`counter-safety3`='0',`notepad-title`='',`notepad-text`='' WHERE `email`='$onlineuser'";
	$result=$conn->query($sql);
 	if($result===true){
		$res['error']=false;
        $res['message']="Variables reset";
		$counter=0;
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="DELETE FROM `notepad` WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="Note deleted Successfully";
	
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
$sql="UPDATE `bluten_options` SET `kleines`=0, `grosses`= 0,`gerin`=0, `entz`= 0,`glucose`=0, `fetts`= 0,`eisen`=0, `leber`= 0,`pankreas`=0, `niere`= 0,`elektrolyte`=0, `schild`= 0,`herz`=0, `bvitamin`= 0,`ldh`=0, `harn`= 0,`psa`=0, `hcg`= 0, `serum`= 0 WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

$sql="UPDATE `urin_options` SET `stix`=0, `sediment`= 0, `kultur`= 0 WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

$sql="UPDATE `stuhl_options` SET `probe`=0, `kultur`= 0, `untersuchung`= 0 WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		 
	$sql="UPDATE `doctor_option` SET `augen`=0,`chiru`=0,`derma`=0,`gyna`=0,`hals`=0,`kardio`=0,`gastro`=0,`pulmo`=0,`nephro`=0,`onko`=0,`endo`=0,`neurochiru`=0,`neuro`=0,`ortho`=0,`padi`=0,`psychi`=0,`radio`=0,`uro`=0 WHERE  `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

	$sql="UPDATE `submit_options` SET `ambulance`=0,`hospital`=0,`noappointment`=0,`badappointment`=0,`twodays`=0,`fivedays`=0,`fourweeks`=0,`ausstellen`=0,`rezept`=0,`diagnosis`='',`rezeptext`='',`submitted`='0', `labloop`='0', `doctorloop`='0'   WHERE `user`='$onlineuser';";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

	$sql="UPDATE `isclicked` SET  `beschreiben`=0, `akutes`=0, `medikamen`=0, `gewohn`=0, `nikotin`=0, `allergien`=0, `vegetative`=0, `gyna`=0, `psyche`=0, `familien`=0,`patientenakte`=0,`kopfinspektion`=0,`kopfnase`=0,`kopfohren`=0,`kopfmund`=0,`kopfschild`=0,`kopflymph`=0,`kopfhals`=0,`kopforient`=0,`thoraxinspektion`=0,`thoraxauskultation`=0,`wirbelinspektion`=0,`wirbelhals`=0, `wirbelfunktion`=0, `abdomeninspektion`=0,`abdomenauskultation`=0, `obereinspektion`=0,`oberebeweg`=0,`obereneurolog`=0,`oberedurch`=0,`untereinspektion`=0,`unterebeweg`=0,`untereneurolog`=0,`unteredurch`=0, `genitalinspektion`=0,`genitalrektal`=0, `temperatur`=0,`blutzucker`=0,`blutdruck`=0,`sono`=0,`ekg`=0,`lung`=0, `blood`=0,`urine`=0,`stool`=0   WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}


	$sql="DELETE FROM `user_history` WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
}


if($action=='countervariable'){

	
	$economy=$_POST['economy'];
	$satisfaction=$_POST['satisfaction'];
	$time=$_POST['time'];
	$step=$_POST['step'];
	$steptime=date('Y-m-d H:i:s');
	$stepandtime=$step.' um '.$steptime.'.';
	$onlineuser=$_POST['onlineuser'];
	$akutes=$_POST['akutes'];
	$allergien=$_POST['allergien'];
	$beschreiben=$_POST['beschreiben'];
	$gyna=$_POST['gyna'];
	$nikotin=$_POST['nikotin'];
	$medikamen=$_POST['medikamen'];
	$gewohn=$_POST['gewohn'];
	$psyche=$_POST['psyche'];
	$vegetative=$_POST['vegetative'];
	$familien=$_POST['familien'];
	$patientenakte=$_POST['patientenakte'];
	$kopfinspektion=$_POST['kopfinspektion'];
	$kopfnase=$_POST['kopfnase'];
	$kopfmund=$_POST['kopfmund'];
	$kopfohren=$_POST['kopfohren'];
	$kopflymph=$_POST['kopflymph'];
	$kopfschild=$_POST['kopfschild'];
	$kopfhals=$_POST['kopfhals'];
	$kopforient=$_POST['kopforient'];
	$thoraxinspektion=$_POST['thoraxinspektion'];
	$thoraxauskultation=$_POST['thoraxauskultation'];
	$wirbelinspektion=$_POST['wirbelinspektion'];
	$wirbelfunktion=$_POST['wirbelfunktion'];
	$wirbelhals=$_POST['wirbelhals'];
	$abdomeninspektion=$_POST['abdomeninspektion'];
	$abdomenauskultation=$_POST['abdomenauskultation'];
	$obereinspektion=$_POST['obereinspektion'];
	$oberebeweg=$_POST['oberebeweg'];
	$obereneurolog=$_POST['obereneurolog'];
	$oberedurch=$_POST['oberedurch'];
	$untereinspektion=$_POST['untereinspektion'];
	$unterebeweg=$_POST['unterebeweg'];
	$untereneurolog=$_POST['untereneurolog'];
	$unteredurch=$_POST['unteredurch'];
	$genitalinspektion=$_POST['genitalinspektion'];
	$genitalrektal=$_POST['genitalrektal'];
	$temperatur=$_POST['temperatur'];
    $blutzucker=$_POST['blutzucker'];
	$blutdruck=$_POST['blutdruck'];
	$sono=$_POST['sono'];
	$ekg=$_POST['ekg'];
	$lung=$_POST['lung'];
	$blood=$_POST['blood'];
	$urine=$_POST['urine'];
	$stool=$_POST['stool'];
	
	 
	$sql="UPDATE `users` SET `economy-counter`=`economy-counter`+$economy ,`counter`=`counter`+1 ,`economy-sum`=  `economy-counter`,`satisfaction-counter`= `satisfaction-counter`+$satisfaction ,`satisfaction-sum`=  `satisfaction-counter`*100/`counter`,`time-counter`= `time-counter`+$time WHERE `email`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	 
	$sql="UPDATE `isclicked` SET `akutes`=$akutes WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `beschreiben`=$beschreiben WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `allergien`=$allergien WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `familien`=$familien WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `gewohn`=$gewohn WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `vegetative`=$vegetative WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `nikotin`=$nikotin WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `psyche`=$psyche WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `gyna`=$gyna WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `medikamen`=$medikamen WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
			$sql="UPDATE `isclicked` SET `patientenakte`=$patientenakte WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
			$sql="UPDATE `isclicked` SET `kopfinspektion`=$kopfinspektion WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `kopfnase`=$kopfnase WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `kopfmund`=$kopfmund WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `kopfohren`=$kopfohren WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `kopfhals`=$kopfhals WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `kopfschild`=$kopfschild WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `kopforient`=$kopforient WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `kopflymph`=$kopflymph WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `thoraxinspektion`=$thoraxinspektion WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `thoraxauskultation`=$thoraxauskultation WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `wirbelinspektion`=$wirbelinspektion WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
   $sql="UPDATE `isclicked` SET `wirbelfunktion`=$wirbelfunktion WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `wirbelhals`=$wirbelhals WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	
	}
	$sql="UPDATE `isclicked` SET `abdomeninspektion`=$abdomeninspektion WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `abdomenauskultation`=$abdomenauskultation WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `obereinspektion`=$obereinspektion WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `oberebeweg`=$oberebeweg WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `obereneurolog`=$obereneurolog WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `oberedurch`=$oberedurch WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `untereinspektion`=$untereinspektion WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `unterebeweg`=$unterebeweg WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `untereneurolog`=$untereneurolog WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `unteredurch`=$unteredurch WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `genitalinspektion`=$genitalinspektion WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `genitalrektal`=$genitalrektal WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
    	$sql="UPDATE `isclicked` SET `temperatur`=$temperatur WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `blutzucker`=$blutzucker WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `blutdruck`=$blutdruck WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `sono`=$sono WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `ekg`=$ekg WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `lung`=$lung WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
		$sql="UPDATE `isclicked` SET `blood`=$blood WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `urine`=$urine WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="UPDATE `isclicked` SET `stool`=$stool WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	

	$sql="INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";
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
	$step=$_POST['step'];
	$steptime=date('Y-m-d H:i:s');
	$stepandtime=$step.' um '.$steptime.'.';
	$onlineuser=$_POST['onlineuser'];

	$sql="UPDATE `users` SET `counter`=`counter`+1 , `satisfaction-counter`= `satisfaction-counter`+$satisfaction ,`satisfaction-sum`=  `satisfaction-counter`*100/`counter`,`time-counter`= `time-counter`+$time WHERE `email`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
     	$sql="INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
}
if($action=='submitlabloop'){
	$onlineuser=$_POST['onlineuser'];

	$sql="UPDATE `submit_options` SET `labloop`=`labloop`+1  WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
}
if($action=='submitdoctorloop'){
	$onlineuser=$_POST['onlineuser'];

	$sql="UPDATE `submit_options` SET `doctorloop`=`doctorloop`+1  WHERE `user`='$onlineuser'";
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
	$onlineuser=$_POST['onlineuser'];
	 
	$sql="INSERT INTO `notepad`( `user`,`title`, `text`) VALUES('$onlineuser','$notetitle','$notetext')";
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
	$sql="SELECT * FROM `notepad` ";
	$result=$conn->query($sql);
	$num=mysqli_num_rows($result);
	$userData=array();
	if($num >0){
		while($row=$result->fetch_assoc()){
			array_push($userData,$row,);
		}
	
        $res=$userData;

	}else{
		$res['error']=false;
        $res['message']="No Data Found!";
	}
	
}
if($action=='getclicks'){
	$sql="SELECT * FROM `isclicked` ";
	$result=$conn->query($sql);
	$num=mysqli_num_rows($result);
	$userData=array();
	if($num >0){
		while($row=$result->fetch_assoc()){
			array_push($userData,$row,);
		}
	
        $res=$userData;

	}else{
		$res['error']=false;
        $res['message']="No Data Found!";
	}
	
}

if($action=='getcounters'){
	$sql="SELECT `economy-sum` as `economy`, `safety-sum` as `safety`, `satisfaction-sum` as `satisfaction`, `time-counter` as `time`, `email` as `email`  FROM `users`";
	$result=$conn->query($sql);
	$num=mysqli_num_rows($result);
	$userData=array();
	if($num >0){
		while($row=$result->fetch_assoc()){
			array_push($userData,$row,);
		}
	
        $res=$userData;

	}else{
		$res['error']=false;
        $res['message']="No Data Found!";
	}
	
}
if($action=='removenotes'){

	$notetitle=$_POST['notetitle'];
	$notetext=$_POST['notetext'];
    $onlineuser=$_POST['onlineuser'];

	$sql="DELETE FROM notepad WHERE user='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="Note deleted Successfully";
	
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}
if($action=='removenote'){

	$notetitle=$_POST['notetitle'];
    $onlineuser=$_POST['onlineuser'];
	$ndate=$_POST['ndate'];

	$sql="DELETE FROM notepad WHERE user='$onlineuser' AND title='$notetitle' AND `date`='$ndate'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="Note deleted Successfully";
	
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}
if($action=='getsteps'){
	$sql="SELECT * FROM `user_history` ";
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
if($action=='getnotess'){
	$sql="SELECT * FROM `notepad` ";
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
	$onlineuser=$_POST["onlineuser"];
	
	 
	$sql="UPDATE `bluten_options` SET `kleines`=$kleines, `grosses`= $grosses,`gerin`=$gerin, `entz`= $entz,`glucose`=$glucose, `fetts`= $fetts,`eisen`=$eisen, `leber`= $leber,`pankreas`=$pankreas, `niere`= $niere,`elektrolyte`=$elektrolyte, `schild`= $schild,`herz`=$herz, `bvitamin`= $bvitamin,`ldh`=$ldh, `harn`= $harn,`psa`=$psa, `hcg`= $hcg, `serum`= $serum WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
}
if($action=='senddoctors'){

	
	$augen=$_POST['augen'];
	$chiru=$_POST['chiru'];
	$derma=$_POST['derma'];
	$gyna=$_POST["gyna"];
	$hals=$_POST["hals"];
	$kardio=$_POST["kardio"];
	$gastro=$_POST["gastro"];
	$pulmo=$_POST["pulmo"];
	$nephro=$_POST["nephro"];
	$onko=$_POST["onko"];
	$endo=$_POST["endo"];
	$neurochiru=$_POST["neurochiru"];
    $neuro=$_POST["neuro"];
	$ortho=$_POST["ortho"];
	$padi=$_POST["padi"];
	$psychi=$_POST["psychi"];
	$radio=$_POST["radio"];
	$uro=$_POST["uro"];
	$onlineuser=$_POST["onlineuser"];
	
	 
	$sql="UPDATE `doctor_option` SET `augen`=$augen,`chiru`=$chiru,`derma`=$derma,`gyna`=$gyna,`hals`=$hals,`kardio`=$kardio,`gastro`=$gastro,`pulmo`=$pulmo,`nephro`=$nephro,`onko`=$onko,`endo`=$endo,`neurochiru`=$neurochiru,`neuro`=$neuro,`ortho`=$ortho,`padi`=$padi,`psychi`=$psychi,`radio`=$radio,`uro`=$uro WHERE  `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
}

if($action=='getblood'){
	$sql="SELECT * FROM `bluten_options`";
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
if($action=='geturine'){
	$sql="SELECT * FROM `urin_options`";
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
if($action=='sendurine'){

	
	$stix=$_POST['urinstix'];
	$sediment=$_POST['urinsediment'];
	$kultur=$_POST['urinkultur'];
	$onlineuser=$_POST["onlineuser"];
	
	 
	$sql="UPDATE `urin_options` SET `stix`=$stix, `sediment`= $sediment, `kultur`= $kultur WHERE `user`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	
}
if($action=='getstool'){
	$sql="SELECT * FROM `stuhl_options`";
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

if($action=='sendstool'){

	
	$probe=$_POST['stoolprobe'];
	$culture=$_POST['stoolculture'];
	$untersuchen=$_POST['untersuchen'];
	$onlineuser=$_POST["onlineuser"];

	 
	$sql="UPDATE `stuhl_options` SET `probe`=$probe, `kultur`= $culture, `untersuchung`= $untersuchen WHERE `user`='$onlineuser'";
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
if($action=='sendsubmit1'){

	
	$diagnose=$_POST['diagnose'];
	$ambulance=$_POST['ambulance'];
	$hospital=$_POST['hospital'];
	$noappointment=$_POST["noappointment"];
	$twodays=$_POST["twodays"];
	$fourweeks=$_POST["fourweeks"];
	$badappointment=$_POST["badappointment"];
	$fivedays=$_POST["fivedays"];
	$ausstellen=$_POST["ausstellen"];
	$rezept=$_POST["rezept"];
	$rezepttext=$_POST["rezepttext"];
	$onlineuser=$_POST["onlineuser"];
	
	 
	$sql="UPDATE `submit_options` SET `ambulance`=$ambulance,`hospital`=$hospital,`noappointment`=$noappointment,`badappointment`=$badappointment,`twodays`=$twodays,`fivedays`=$fivedays,`fourweeks`=$fourweeks,`ausstellen`=$ausstellen,`rezept`=$rezept,`diagnosis`='$diagnose',`rezeptext`='$rezepttext'  WHERE `user`='$onlineuser';";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
    	
}
if($action=='sendsubmit2'){

	
	$diagnose=$_POST['diagnose'];
	$ambulance=$_POST['ambulance'];
	$hospital=$_POST['hospital'];
	$noappointment=$_POST["noappointment"];
	$twodays=$_POST["twodays"];
	$fourweeks=$_POST["fourweeks"];
	$badappointment=$_POST["badappointment"];
	$fivedays=$_POST["fivedays"];
	$ausstellen=$_POST["ausstellen"];
	$rezept=$_POST["rezept"];
	$rezepttext=$_POST["rezepttext"];
	$onlineuser=$_POST["onlineuser"];
	
	 
	$sql="UPDATE `submit_options` SET `ambulance`=$ambulance,`hospital`=$hospital,`noappointment`=$noappointment,`badappointment`=$badappointment,`twodays`=$twodays,`fivedays`=$fivedays,`fourweeks`=$fourweeks,`ausstellen`=$ausstellen,`rezept`=$rezept,`diagnosis`='$diagnose',`rezeptext`='$rezepttext'  WHERE `user`='$onlineuser';";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
    	
}
if($action=='sendsubmit3'){

	
	$diagnose=$_POST['diagnose'];
	$ambulance=$_POST['ambulance'];
	$hospital=$_POST['hospital'];
	$noappointment=$_POST["noappointment"];
	$twodays=$_POST["twodays"];
	$fourweeks=$_POST["fourweeks"];
	$badappointment=$_POST["badappointment"];
	$fivedays=$_POST["fivedays"];
	$ausstellen=$_POST["ausstellen"];
	$rezept=$_POST["rezept"];
	$rezepttext=$_POST["rezepttext"];
	$onlineuser=$_POST["onlineuser"];
	
	 
	$sql="UPDATE `submit_options` SET `ambulance`=$ambulance,`hospital`=$hospital,`noappointment`=$noappointment,`badappointment`=$badappointment,`twodays`=$twodays,`fivedays`=$fivedays,`fourweeks`=$fourweeks,`ausstellen`=$ausstellen,`rezept`=$rezept,`diagnosis`='$diagnose',`rezeptext`='$rezepttext', `submitted`=1  WHERE `user`='$onlineuser';";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
    	
}
if($action=='sendsubmit4'){

	

	$onlineuser=$_POST["onlineuser"];
	
	 
	$sql="UPDATE `submit_options` SET  `submitted`=1  WHERE `user`='$onlineuser';";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
    	
}
if($action=='submitvariable'){

	
	
	$safety=$_POST["safety"];
	$economy=$_POST["economy"];
	$step=$_POST['step'];
	$steptime=date('Y-m-d H:i:s');
	$stepandtime=$step.' um '.$steptime.'.';
	$onlineuser=$_POST["onlineuser"];
	 
	$sql="UPDATE `users` SET `economy-counter`=`economy-counter`+$economy ,`counter`=`counter`+1 ,`counter-safety`=`counter-safety`+1,`economy-sum`=  `economy-counter`,  `safety-counter`= (`safety-counter`+$safety),`safety-sum` = `safety-counter`/ `counter-safety` WHERE `email`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";

	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
}

if($action=='submitvariable2'){

	
	
	$safety=$_POST["safety"];
	
	$step=$_POST['step'];
	$steptime=date('Y-m-d H:i:s');
	$stepandtime=$step.' um '.$steptime.'.';
	$onlineuser=$_POST["onlineuser"];
	 
	$sql="UPDATE `users` SET `counter`=`counter`+1 , `counter-safety2`=`counter-safety2`+1 , `safety-counter2`= (`safety-counter2`+$safety),`safety-sum` = `safety-counter2`/ `counter-safety2` WHERE `email`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";

	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
}
if($action=='submitvariable3'){

	
	
	$safety=$_POST["safety"];
	
	$step=$_POST['step'];
	$steptime=date('Y-m-d H:i:s');
	$stepandtime=$step.' um '.$steptime.'.';
	$onlineuser=$_POST["onlineuser"];
	 
	$sql="UPDATE `users` SET `counter`=`counter`+1 , `counter-safety3`=`counter-safety3`+1 , `safety-counter3`= (`safety-counter3`+$safety),`safety-sum` = `safety-counter3`/ `counter-safety3` WHERE `email`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
	$sql="INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";

	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}
}
if($action=='rezeptvariable'){

	
	

	$economy=$_POST["economy"];
	$onlineuser=$_POST["onlineuser"];
	
	 
	$sql="UPDATE `users` SET `economy-counter`=`economy-counter`+$economy ,`counter`=`counter`+1 ,`economy-sum`=  `economy-counter` WHERE `email`='$onlineuser'";
	$result=$conn->query($sql);
	if($result===true){
		$res['error']=false;
        $res['message']="variables Added Successfully";
	}else{
		$res['error']=true;
        $res['message']="Somthing Went Wrong";
	}

}
if($action=='getpatient'){
	$sql="SELECT * FROM `patients`";
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
if($action=='getdoctors'){
	$sql="SELECT * FROM `doctor_option`";
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
if($action=='getsubmit'){
	$sql="SELECT * FROM `submit_options`";
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
$conn -> close();
header("Content-type: application/json");
echo json_encode($res);
die();
 ?>