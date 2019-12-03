<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
foreach($result as $r){
   
    <tr>
    <td><?= $r->ID;?> </td>
    <td><?= $r->username;?> </td>
    <td><?= $r->password;?> </td>
    <td><img src='<?= $r->image;?>' height="50px" width="100px"> </td>
// sql to delete a record
$sql = "DELETE FROM user WHERE <?=$r->ID,$r->username,$r->image,$r->password  ?>";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>