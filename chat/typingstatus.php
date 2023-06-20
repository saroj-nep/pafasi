<?php

$conn = new mysqli("webdb5.rz.uni-saarland.de", "pafasi", "_esd%ssLx9Adx", "edu_pafasi");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
require_once('blabax.php');
$typingStatus = $conn->real_escape_string($_POST['typing']);
$username = $uname;


$sql = "UPDATE pafasi_blabax_typingstatus SET `is_typing` = '$typingStatus' WHERE `username` = '$username' ";

$result = $conn->query($sql);
if ($result === true) {
    if ($conn->affected_rows > 0) {
        echo "Record updated successfully";
    } else {
        echo "No matching record found";
    }
} else {
    $res['error'] = true;
    echo "Something went wrong: " . $conn->error;
}

$conn->close();

?>