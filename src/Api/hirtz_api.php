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
$action = '';


if (isset($_GET['action'])) {

	$action = $_GET['action'];
}
if ($action == 'login') {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "Select * from users where email='$email' AND password= PASSWORD('$password')";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	if ($num > 0) {
		$res['message'] = "Login Successfuly";

	} else {
		$res['error'] = true;
		$res['message'] = "Your Login email or Password is invalid";
	}

}
if ($action == 'online') {
	$email = $_POST['email'];
	$logintime = date('Y-m-d H:i:s');

	$sql = "INSERT INTO `onlineusers`( `email`, `logintime`) VALUES('$email', '$logintime')";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);

}
if ($action == 'logout') {

	$onlineuser = $_POST['onlineuser'];

	$sql = "DELETE FROM onlineusers WHERE email='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "User removed Successfully";

	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
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
if ($action == 'emptydiagnosis') {


	$onlineuser = $_POST['onlineuser'];


	$sql = "UPDATE `hirtz_users` SET `counter`='0',`economy-counter`='0' ,`economy-sum`='0' ,`safety-counter`= '0',`safety-counter2`= '0',`safety-counter3`= '0',`safety-sum`= '0',`satisfaction-counter`= '0' ,`satisfaction-sum`= '0' ,`time-counter`= '0',`counter-safety`='0',`counter-safety2`='0',`counter-safety3`='0',`notepad-title`='',`notepad-text`='' WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "Variables reset";
		$counter = 0;
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "DELETE FROM `hirtz_notepad` WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "Note deleted Successfully";

	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_bluten_options` SET `kleines`=0, `grosses`= 0,`gerin`=0, `entz`= 0,`glucose`=0, `fetts`= 0,`eisen`=0, `leber`= 0,`pankreas`=0, `niere`= 0,`elektrolyte`=0, `schild`= 0,`herz`=0, `bvitamin`= 0,`ldh`=0, `harn`= 0,`psa`=0, `hcg`= 0, `serum`= 0 WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

	$sql = "UPDATE `hirtz_urin_options` SET `stix`=0, `sediment`= 0, `kultur`= 0 WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

	$sql = "UPDATE `hirtz_stuhl_options` SET `probe`=0, `kultur`= 0, `untersuchung`= 0 WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

	$sql = "UPDATE `hirtz_doctor_option` SET `augen`=0,`chiru`=0,`derma`=0,`gyna`=0,`hals`=0,`kardio`=0,`gastro`=0,`pulmo`=0,`nephro`=0,`onko`=0,`endo`=0,`neurochiru`=0,`neuro`=0,`ortho`=0,`padi`=0,`psychi`=0,`radio`=0,`uro`=0 WHERE  `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

	$sql = "UPDATE `hirtz_submit_options` SET `ambulance`=0,`hospital`=0,`noappointment`=0,`badappointment`=0,`twodays`=0,`fivedays`=0,`fourweeks`=0,`ausstellen`=0,`rezept`=0,`diagnosis`='',`rezeptext`='',`submitted`=0,`wiedereinbestellen`=0, `labloop`=0, `doctorloop`=0   WHERE `user`='$onlineuser';";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

	$sql = "UPDATE `hirtz_isclicked` SET  `beschreiben`=0, `akutes`=0, `medikamen`=0, `gewohn`=0, `nikotin`=0, `allergien`=0, `vegetative`=0, `gyna`=0, `psyche`=0, `familien`=0,`patientenakte`=0,`kopfinspektion`=0,`kopfnase`=0,`kopfohren`=0,`kopfmund`=0,`kopfschild`=0,`kopflymph`=0,`kopfhals`=0,`kopforient`=0,`thoraxinspektion`=0,`thoraxauskultation`=0,`wirbelinspektion`=0,`wirbelhals`=0, `wirbelfunktion`=0, `abdomeninspektion`=0,`abdomenauskultation`=0, `obereinspektion`=0,`oberebeweg`=0,`obereneurolog`=0,`oberedurch`=0,`untereinspektion`=0,`unterebeweg`=0,`untereneurolog`=0,`unteredurch`=0, `genitalinspektion`=0,`genitalrektal`=0, `temperatur`=0,`blutzucker`=0,`blutdruck`=0,`sono`=0,`ekg`=0,`lung`=0, `blood`=0,`urine`=0,`stool`=0,`doctors`=0   WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}

if ($action == 'countertimevariable') {
	$time = $_POST['time'];
	$step = $_POST['step'];
	$steptime = date('Y-m-d H:i:s');
	$stepandtime = $step . ' um ' . $steptime . '.';
	$onlineuser = $_POST['onlineuser'];

	$sql = "UPDATE `hirtz_users` SET `time-counter`= `time-counter`+$time WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

	$sql = "INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}


}
if ($action == 'currentpage') {


	$main = $_POST['main'];
	$warte = $_POST['warte'];
	$patient = $_POST['patient'];
	$anamnese = $_POST['anamnese'];
	$patientenakte = $_POST['patientenakte'];
	$laboratory = $_POST['laboratory'];
	$blood = $_POST['blood'];
	$urine = $_POST['urine'];
	$stool = $_POST['stool'];
	$sendblood = $_POST['sendblood'];
	$sendurine = $_POST['sendurine'];
	$sendstool = $_POST['sendstool'];
	$doctors = $_POST['doctors'];
	$senddoctors = $_POST['senddoctors'];
	$untersuchen = $_POST['untersuchen'];
	$nicht = $_POST['nicht'];
	$kopf = $_POST['kopf'];
	$rumpf = $_POST['rumpf'];
	$thorax = $_POST['thorax'];
	$wirbel = $_POST['wirbel'];
	$abdomen = $_POST['abdomen'];
	$obere = $_POST['obere'];
	$untere = $_POST['untere'];
	$genital = $_POST['genital'];
	$apparative = $_POST['apparative'];
	$sono = $_POST['sono'];
	$ekg = $_POST['ekg'];
	$lungen = $_POST['lungen'];
	$sendsubmit = $_POST['sendsubmit'];
	$submit1 = $_POST['submit1'];
	$submit2 = $_POST['submit2'];
	$submit3 = $_POST['submit3'];
	$lab = $_POST['lab'];
	$afterlab = $_POST['afterlab'];
	$specialties = $_POST['specialties'];
	$afterspecialties = $_POST['afterspecialties'];
	$prints = $_POST['prints'];
	$onlineuser = $_POST['onlineuser'];

	$sql = "UPDATE `hirtz_currentpage` SET `main`=$main,`warte`=$warte, `patient`=$patient, `anamnese`=$anamnese, `patientenakte`=$patientenakte, `laboratory`=$laboratory, `blood`=$blood, `urine`=$urine, `stool`=$stool, `sendblood`=$sendblood, `sendurine`=$sendurine, `sendstool`=$sendstool, `doctors`=$doctors, `senddoctors`=$senddoctors, `untersuchen`=$untersuchen, `nicht`=$nicht, `kopf`=$kopf, `rumpf`=$rumpf, `thorax`=$thorax, `wirbel`=$wirbel, `abdomen`=$abdomen, `obere`=$obere, `untere`=$untere, `genital`=$genital, `apparative`=$apparative, `sono`=$sono, `ekg`=$ekg, `lungen`=$lungen, `sendsubmit`=$sendsubmit, `submit1`=$submit1, `lab`=$lab, `afterlab`=$afterlab, `specialties`=$specialties, `afterspecialties`=$afterspecialties, `submit2`=$submit2, `submit3`=$submit3, `prints`=$prints WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}


if ($action == 'countervariable') {


	$economy = $_POST['economy'];
	$satisfaction = $_POST['satisfaction'];
	$time = $_POST['time'];
	$step = $_POST['step'];
	$steptime = date('Y-m-d H:i:s');
	$stepandtime = $step . ' um ' . $steptime . '.';
	$onlineuser = $_POST['onlineuser'];
	$akutes = $_POST['akutes'];
	$allergien = $_POST['allergien'];
	$beschreiben = $_POST['beschreiben'];
	$gyna = $_POST['gyna'];
	$nikotin = $_POST['nikotin'];
	$medikamen = $_POST['medikamen'];
	$gewohn = $_POST['gewohn'];
	$psyche = $_POST['psyche'];
	$vegetative = $_POST['vegetative'];
	$familien = $_POST['familien'];
	$patientenakte = $_POST['patientenakte'];
	$kopfinspektion = $_POST['kopfinspektion'];
	$kopfnase = $_POST['kopfnase'];
	$kopfmund = $_POST['kopfmund'];
	$kopfohren = $_POST['kopfohren'];
	$kopflymph = $_POST['kopflymph'];
	$kopfschild = $_POST['kopfschild'];
	$kopfhals = $_POST['kopfhals'];
	$kopforient = $_POST['kopforient'];
	$thoraxinspektion = $_POST['thoraxinspektion'];
	$thoraxauskultation = $_POST['thoraxauskultation'];
	$wirbelinspektion = $_POST['wirbelinspektion'];
	$wirbelfunktion = $_POST['wirbelfunktion'];
	$wirbelhals = $_POST['wirbelhals'];
	$abdomeninspektion = $_POST['abdomeninspektion'];
	$abdomenauskultation = $_POST['abdomenauskultation'];
	$obereinspektion = $_POST['obereinspektion'];
	$oberebeweg = $_POST['oberebeweg'];
	$obereneurolog = $_POST['obereneurolog'];
	$oberedurch = $_POST['oberedurch'];
	$untereinspektion = $_POST['untereinspektion'];
	$unterebeweg = $_POST['unterebeweg'];
	$untereneurolog = $_POST['untereneurolog'];
	$unteredurch = $_POST['unteredurch'];
	$genitalinspektion = $_POST['genitalinspektion'];
	$genitalrektal = $_POST['genitalrektal'];
	$temperatur = $_POST['temperatur'];
	$blutzucker = $_POST['blutzucker'];
	$blutdruck = $_POST['blutdruck'];
	$sono = $_POST['sono'];
	$ekg = $_POST['ekg'];
	$lung = $_POST['lung'];
	$blood = $_POST['blood'];
	$urine = $_POST['urine'];
	$stool = $_POST['stool'];


	$sql = "UPDATE `hirtz_users` SET `economy-counter`=`economy-counter`+$economy ,`counter`=`counter`+1 ,`economy-sum`=  `economy-counter`,`satisfaction-counter`= `satisfaction-counter`+$satisfaction ,`satisfaction-sum`=  `satisfaction-counter`*100/`counter`,`time-counter`= `time-counter`+$time WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

	$sql = "UPDATE `hirtz_isclicked` SET `akutes`=$akutes WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `beschreiben`=$beschreiben WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `allergien`=$allergien WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `familien`=$familien WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `gewohn`=$gewohn WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `vegetative`=$vegetative WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `nikotin`=$nikotin WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `psyche`=$psyche WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `gyna`=$gyna WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `medikamen`=$medikamen WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `patientenakte`=$patientenakte WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `kopfinspektion`=$kopfinspektion WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `kopfnase`=$kopfnase WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `kopfmund`=$kopfmund WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `kopfohren`=$kopfohren WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `kopfhals`=$kopfhals WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `kopfschild`=$kopfschild WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `kopforient`=$kopforient WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `kopflymph`=$kopflymph WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `thoraxinspektion`=$thoraxinspektion WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `thoraxauskultation`=$thoraxauskultation WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `wirbelinspektion`=$wirbelinspektion WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `wirbelfunktion`=$wirbelfunktion WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `wirbelhals`=$wirbelhals WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";

	}
	$sql = "UPDATE `hirtz_isclicked` SET `abdomeninspektion`=$abdomeninspektion WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `abdomenauskultation`=$abdomenauskultation WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `obereinspektion`=$obereinspektion WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `oberebeweg`=$oberebeweg WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `obereneurolog`=$obereneurolog WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `oberedurch`=$oberedurch WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `untereinspektion`=$untereinspektion WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `unterebeweg`=$unterebeweg WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `untereneurolog`=$untereneurolog WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `unteredurch`=$unteredurch WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `genitalinspektion`=$genitalinspektion WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `genitalrektal`=$genitalrektal WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `temperatur`=$temperatur WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `blutzucker`=$blutzucker WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `blutdruck`=$blutdruck WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `sono`=$sono WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `ekg`=$ekg WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `lung`=$lung WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `blood`=$blood WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `urine`=$urine WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `stool`=$stool WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}


	$sql = "INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}
if ($action == 'facharztvariable') {



	$satisfaction = $_POST['satisfaction'];
	$time = $_POST['time'];
	$step = $_POST['step'];
	$steptime = date('Y-m-d H:i:s');
	$stepandtime = $step . ' um ' . $steptime . '.';
	$onlineuser = $_POST['onlineuser'];

	$sql = "UPDATE `hirtz_users` SET `counter`=`counter`+1 , `satisfaction-counter`= `satisfaction-counter`+$satisfaction ,`satisfaction-sum`=  `satisfaction-counter`*100/`counter`,`time-counter`= `time-counter`+$time WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}
if ($action == 'facharzteconomyvariable') {



	$economy = $_POST['economy'];
	$doctors = $_POST['doctors'];
	$onlineuser = $_POST['onlineuser'];

	$sql = "UPDATE `hirtz_users` SET`economy-counter`=`economy-counter`+$economy ,`economy-sum`=  `economy-counter` WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "UPDATE `hirtz_isclicked` SET `doctors`=$doctors WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}


if ($action == 'submitlabloop') {
	$onlineuser = $_POST['onlineuser'];

	$sql = "UPDATE `hirtz_submit_options` SET `labloop`=`labloop`+1  WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}
if ($action == 'submitdoctorloop') {
	$onlineuser = $_POST['onlineuser'];

	$sql = "UPDATE `hirtz_submit_options` SET `doctorloop`=`doctorloop`+1  WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}
if ($action == 'addnote') {


	$notetitle = $_POST['notetitle'];
	$notetext = $_POST['notetext'];
	$onlineuser = $_POST['onlineuser'];

	$sql = "INSERT INTO `hirtz_notepad`( `user`,`title`, `text`) VALUES('$onlineuser','$notetitle','$notetext')";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "Note Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}

if ($action == 'getnotes') {
	$sql = "SELECT * FROM `hirtz_notepad` ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row, );
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getpagestatus') {

	$sql = "SELECT * FROM `hirtz_currentpage`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row, );
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getclicks') {
	$sql = "SELECT * FROM `hirtz_isclicked` ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row, );
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}

if ($action == 'getcounters') {
	$sql = "SELECT ROUND((`economy-sum`),2) as `economy`, ROUND(`safety-sum`,2) as `safety`, ROUND(`satisfaction-sum`,2) as `satisfaction`, `time-counter` as `time`, `email` as `email`, `tutor` as `tutor`, `studentid` as `studentid` FROM `hirtz_users`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row, );
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getoriginalcounters') {
	$sql = "SELECT ROUND((`economy-sum`),2) as `economy`, ROUND(`safety-sum`,2) as `safety`, ROUND(`satisfaction-sum`,2) as `satisfaction`, `time-counter` as `time`, `email` as `email`, `tutor` as `tutor`, `studentid` as `studentid` FROM `hirtz_original_users`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row, );
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}

if ($action == 'removenotes') {

	$notetitle = $_POST['notetitle'];
	$notetext = $_POST['notetext'];
	$onlineuser = $_POST['onlineuser'];

	$sql = "DELETE FROM hirtz_notepad WHERE user='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "Note deleted Successfully";

	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}
if ($action == 'removenote') {

	$notetitle = $_POST['notetitle'];
	$onlineuser = $_POST['onlineuser'];
	$ndate = $_POST['ndate'];

	$sql = "DELETE FROM hirtz_notepad WHERE user='$onlineuser' AND title='$notetitle' AND `date`='$ndate'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "Note deleted Successfully";

	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}
if ($action == 'getsteps') {
	$sql = "SELECT * FROM `user_history` ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getnotes') {
	$sql = "SELECT * FROM `hirtz_notepad` ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'sendblood') {


	$kleines = $_POST['bloodkleines'];
	$grosses = $_POST['bloodgrosses'];
	$gerin = $_POST['bloodgerin'];
	$entz = $_POST["bloodentz"];
	$glucose = $_POST["bloodglucose"];
	$fetts = $_POST["bloodfetts"];
	$eisen = $_POST["bloodeisen"];
	$leber = $_POST["bloodleber"];
	$pankreas = $_POST["bloodpankreas"];
	$niere = $_POST["bloodniere"];
	$elektrolyte = $_POST["bloodelektrolyte"];
	$schild = $_POST["bloodschild"];
	$herz = $_POST["bloodherz"];
	$bvitamin = $_POST["bloodbvitamin"];
	$ldh = $_POST["bloodldh"];
	$harn = $_POST["bloodharn"];
	$psa = $_POST["bloodpsa"];
	$hcg = $_POST["bloodhcg"];
	$serum = $_POST["bloodserum"];
	$onlineuser = $_POST["onlineuser"];


	$sql = "UPDATE `hirtz_bluten_options` SET `kleines`=$kleines, `grosses`= $grosses,`gerin`=$gerin, `entz`= $entz,`glucose`=$glucose, `fetts`= $fetts,`eisen`=$eisen, `leber`= $leber,`pankreas`=$pankreas, `niere`= $niere,`elektrolyte`=$elektrolyte, `schild`= $schild,`herz`=$herz, `bvitamin`= $bvitamin,`ldh`=$ldh, `harn`= $harn,`psa`=$psa, `hcg`= $hcg, `serum`= $serum WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}
if ($action == 'senddoctors') {


	$augen = $_POST['augen'];
	$chiru = $_POST['chiru'];
	$derma = $_POST['derma'];
	$gyna = $_POST["gyna"];
	$hals = $_POST["hals"];
	$kardio = $_POST["kardio"];
	$gastro = $_POST["gastro"];
	$pulmo = $_POST["pulmo"];
	$nephro = $_POST["nephro"];
	$onko = $_POST["onko"];
	$endo = $_POST["endo"];
	$neurochiru = $_POST["neurochiru"];
	$neuro = $_POST["neuro"];
	$ortho = $_POST["ortho"];
	$padi = $_POST["padi"];
	$psychi = $_POST["psychi"];
	$radio = $_POST["radio"];
	$uro = $_POST["uro"];
	$onlineuser = $_POST["onlineuser"];


	$sql = "UPDATE `hirtz_doctor_option` SET `augen`=$augen,`chiru`=$chiru,`derma`=$derma,`gyna`=$gyna,`hals`=$hals,`kardio`=$kardio,`gastro`=$gastro,`pulmo`=$pulmo,`nephro`=$nephro,`onko`=$onko,`endo`=$endo,`neurochiru`=$neurochiru,`neuro`=$neuro,`ortho`=$ortho,`padi`=$padi,`psychi`=$psychi,`radio`=$radio,`uro`=$uro WHERE  `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}

if ($action == 'getblood') {
	$sql = "SELECT * FROM `hirtz_bluten_options`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}

if ($action == 'getbloods') {

	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_bluten_options` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getstools') {

	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_stuhl_options` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'geturines') {

	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_urin_options` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getoriginalbloods') {

	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_original_bluten_options` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getoriginalstools') {

	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_original_stuhl_options` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getoriginalurines') {

	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_original_urin_options` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'geturine') {
	$sql = "SELECT * FROM `hirtz_urin_options`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'sendurine') {


	$stix = $_POST['urinstix'];
	$sediment = $_POST['urinsediment'];
	$kultur = $_POST['urinkultur'];
	$onlineuser = $_POST["onlineuser"];


	$sql = "UPDATE `hirtz_urin_options` SET `stix`=$stix, `sediment`= $sediment, `kultur`= $kultur WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}
if ($action == 'getstool') {
	$sql = "SELECT * FROM `hirtz_stuhl_options`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}

if ($action == 'sendstool') {


	$probe = $_POST['stoolprobe'];
	$culture = $_POST['stoolculture'];
	$untersuchen = $_POST['untersuchen'];
	$onlineuser = $_POST["onlineuser"];


	$sql = "UPDATE `hirtz_stuhl_options` SET `probe`=$probe, `kultur`= $culture, `untersuchung`= $untersuchen WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}


}
if ($action == 'getusers') {
	$sql = "SELECT * FROM `hirtz_users`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getuserinfo') {
	$sql = "SELECT * FROM `hirtz_usersdata`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}
		$res['error'] = false;
		$res['user_Data'] = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'sendsubmit1') {


	$diagnose = $_POST['diagnose'];
	$ambulance = $_POST['ambulance'];
	$hospital = $_POST['hospital'];
	$noappointment = $_POST["noappointment"];
	$twodays = $_POST["twodays"];
	$fourweeks = $_POST["fourweeks"];
	$badappointment = $_POST["badappointment"];
	$fivedays = $_POST["fivedays"];
	$ausstellen = $_POST["ausstellen"];
	$rezept = $_POST["rezept"];
	$rezepttext = $_POST["rezepttext"];
	$onlineuser = $_POST["onlineuser"];


	$sql = "UPDATE `hirtz_submit_options` SET `ambulance`=$ambulance,`hospital`=$hospital,`noappointment`=$noappointment,`badappointment`=$badappointment,`twodays`=$twodays,`fivedays`=$fivedays,`fourweeks`=$fourweeks,`ausstellen`=$ausstellen,`rezept`=$rezept,`diagnosis`='$diagnose',`rezeptext`='$rezepttext'  WHERE `user`='$onlineuser';";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}
if ($action == 'sendsubmit2') {


	$diagnose = $_POST['diagnose'];
	$ambulance = $_POST['ambulance'];
	$hospital = $_POST['hospital'];
	$noappointment = $_POST["noappointment"];
	$twodays = $_POST["twodays"];
	$fourweeks = $_POST["fourweeks"];
	$badappointment = $_POST["badappointment"];
	$fivedays = $_POST["fivedays"];
	$ausstellen = $_POST["ausstellen"];
	$rezept = $_POST["rezept"];
	$rezepttext = $_POST["rezepttext"];
	$wiedereinbestellen = $_POST["wiedereinbestellen"];
	$labloop = $_POST["labloop"];
	$onlineuser = $_POST["onlineuser"];


	$sql = "UPDATE `hirtz_submit_options` SET `ambulance`=$ambulance,`hospital`=$hospital,`noappointment`=$noappointment,`badappointment`=$badappointment,`twodays`=$twodays,`fivedays`=$fivedays,`fourweeks`=$fourweeks,`ausstellen`=$ausstellen,`rezept`=$rezept,`diagnosis`='$diagnose',`rezeptext`='$rezepttext',`wiedereinbestellen`=$wiedereinbestellen, `labloop`=$labloop  WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}
if ($action == 'sendsubmit3') {


	$diagnose = $_POST['diagnose'];
	$ambulance = $_POST['ambulance'];
	$hospital = $_POST['hospital'];
	$noappointment = $_POST["noappointment"];
	$twodays = $_POST["twodays"];
	$fourweeks = $_POST["fourweeks"];
	$badappointment = $_POST["badappointment"];
	$fivedays = $_POST["fivedays"];
	$ausstellen = $_POST["ausstellen"];
	$rezept = $_POST["rezept"];
	$rezepttext = $_POST["rezepttext"];
	$wiedereinbestellen = $_POST["wiedereinbestellen"];
	$doctorloop = $_POST["doctorloop"];
	$onlineuser = $_POST["onlineuser"];


	$sql = "UPDATE `hirtz_submit_options` SET `ambulance`=$ambulance,`hospital`=$hospital,`noappointment`=$noappointment,`badappointment`=$badappointment,`twodays`=$twodays,`fivedays`=$fivedays,`fourweeks`=$fourweeks,`ausstellen`=$ausstellen,`rezept`=$rezept,`diagnosis`='$diagnose',`rezeptext`='$rezepttext',`wiedereinbestellen`=$wiedereinbestellen,`doctorloop`=$doctorloop, `submitted`=1  WHERE `user`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}
if ($action == 'sendsubmit4') {



	$onlineuser = $_POST["onlineuser"];


	$sql = "UPDATE `hirtz_submit_options` SET  `submitted`=1  WHERE `user`='$onlineuser';";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}
if ($action == 'submitrezeptvariable') {




	$economy = $_POST["economy"];
	$step = $_POST['step'];
	$steptime = date('Y-m-d H:i:s');
	$stepandtime = $step . ' um ' . $steptime . '.';
	$onlineuser = $_POST["onlineuser"];

	$sql = "UPDATE `hirtz_users` SET `economy-counter`=`economy-counter`+$economy ,`economy-sum`=  `economy-counter` WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";

	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}


if ($action == 'submitvariable') {



	$safety = $_POST["safety"];
	$economy = $_POST["economy"];
	$step = $_POST['step'];
	$steptime = date('Y-m-d H:i:s');
	$stepandtime = $step . ' um ' . $steptime . '.';
	$onlineuser = $_POST["onlineuser"];

	$sql = "UPDATE `hirtz_users` SET `economy-counter`=`economy-counter`+$economy ,`counter`=`counter`+1 ,`counter-safety`=`counter-safety`+1,`economy-sum`=  `economy-counter`,  `safety-counter`= (`safety-counter`+$safety),`safety-sum` = $safety WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";

	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}

if ($action == 'submitvariable2') {



	$safety = $_POST["safety"];

	$step = $_POST['step'];
	$steptime = date('Y-m-d H:i:s');
	$stepandtime = $step . ' um ' . $steptime . '.';
	$onlineuser = $_POST["onlineuser"];

	$sql = "UPDATE `hirtz_users` SET `counter`=`counter`+1 , `counter-safety2`=`counter-safety2`+1 , `safety-counter2`= (`safety-counter2`+$safety),`safety-sum` = $safety WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";

	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}
if ($action == 'submitvariable3') {



	$safety = $_POST["safety"];

	$step = $_POST['step'];
	$steptime = date('Y-m-d H:i:s');
	$stepandtime = $step . ' um ' . $steptime . '.';
	$onlineuser = $_POST["onlineuser"];

	$sql = "UPDATE `hirtz_users` SET `counter`=`counter`+1 , `counter-safety3`=`counter-safety3`+1 , `safety-counter3`= (`safety-counter3`+$safety),`safety-sum` = $safety WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
	$sql = "INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";

	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}

if ($action == 'sendthesteps') {
	$step = $_POST['step'];
	$steptime = date('Y-m-d H:i:s');
	$stepandtime = $step . ' um ' . $steptime . '.';
	$onlineuser = $_POST["onlineuser"];

	$sql = "INSERT INTO `user_history`( `user`,`steps`,`steptime`) VALUES('$onlineuser','$step','$steptime')";

	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}
}

if ($action == 'rezeptvariable') {




	$economy = $_POST["economy"];
	$onlineuser = $_POST["onlineuser"];


	$sql = "UPDATE `hirtz_users` SET `economy-counter`=`economy-counter`+$economy ,`counter`=`counter`+1 ,`economy-sum`=  `economy-counter` WHERE `email`='$onlineuser'";
	$result = $conn->query($sql);
	if ($result === true) {
		$res['error'] = false;
		$res['message'] = "variables Added Successfully";
	} else {
		$res['error'] = true;
		$res['message'] = "Somthing Went Wrong";
	}

}
if ($action == 'getpatient') {
	$sql = "SELECT * FROM `hirtz_patients`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getdoctors') {
	$sql = "SELECT * FROM `hirtz_doctor_option`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getsubmit') {
	$sql = "SELECT * FROM `hirtz_submit_options`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getoriginalsubmit') {
	$sql = "SELECT * FROM `hirtz_original_submit_options`";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getdownloadstuff') {
	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_submit_options` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getoriginaldownloadstuff') {
	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_original_submit_options` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getisclicked') {

	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_isclicked` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}
if ($action == 'getoriginalisclicked') {

	$user = $_GET['user'];
	$sql = "SELECT * FROM `hirtz_original_isclicked` WHERE `user`='$user' ";
	$result = $conn->query($sql);
	$num = mysqli_num_rows($result);
	$userData = array();
	if ($num > 0) {
		while ($row = $result->fetch_assoc()) {
			array_push($userData, $row);
		}

		$res = $userData;

	} else {
		$res['error'] = false;
		$res['message'] = "No Data Found!";
	}

}

$conn->close();
header("Content-type: application/json");
echo json_encode($res);
die();
?>