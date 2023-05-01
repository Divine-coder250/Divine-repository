<?php
include 'connection.php';

$result = $conn->query("SELECT * FROM users");
if ($result->num_rows > 0) {
$delimiter = ",";
$filename = "users.data_" . date('Y-m-d') . ".csv";
$f = fopen('php://memory', 'w');
$fields = array('fname', 'lname', 'email', 'password', 'gender');
fputcsv($f, $fields, $delimiter);
while ($row = $result->fetch_assoc()) {
$lineData = array($row['fname'], $row['lname'], $row['email'], $row['password'], $row['gender']);
fputcsv($f, $lineData, $delimiter);
}
fseek($f, 0);
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename='.$filename.';');
fpassthru($f);
exit;
}
header("Location: index.php");
exit;
?>