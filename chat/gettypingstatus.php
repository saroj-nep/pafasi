<?php

$conn = new mysqli("webdb5.rz.uni-saarland.de", "pafasi", "_esd%ssLx9Adx", "edu_pafasi");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$username = $uname;

$typingStatusHtml = ''; // Declaration of the $typingStatusHtml variable

$ugroupSql = "SELECT ugroup FROM pafasi_blabax_typingstatus WHERE username = '$username'";
$ugroupResult = $conn->query($ugroupSql);

if ($ugroupResult->num_rows > 0) {
    $ugroupRow = $ugroupResult->fetch_assoc();
    $ugroup = $ugroupRow['ugroup'];

    // Retrieve users with typing status 1 in the same group
    $typingStatusSql = "SELECT username FROM pafasi_blabax_typingstatus WHERE is_typing = 1 AND ugroup = '$ugroup'";
    $typingStatusResult = $conn->query($typingStatusSql);

    if ($typingStatusResult->num_rows > 0) {
        while ($row = $typingStatusResult->fetch_assoc()) {
            $username = $row['username'];
            $typingStatusHtml .= "<p>{$username} is typing...</p>";
        }
    }
}
$conn->close();

// Output the typing status HTML
echo $typingStatusHtml;
?>