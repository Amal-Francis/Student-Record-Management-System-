<<<<<<< HEAD
<?php
$servername = "localhost";
$username="root";
$password = "";
$dbname = "student_registration.student_record";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
=======
<?php
$servername = "localhost";
$username="root";
$password = "";
$dbname = "student_registration.student_record";
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
>>>>>>> 1d6e5651ebbd81b0c34443a5d4201af261de6cb6
?>