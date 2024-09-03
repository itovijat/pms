<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pms";
try 
{
  mysqli_connect($servername, $username, $password, $dbname) or die ();
}
catch (Exception $e) 
{
  echo "<script> window.location.href = 'notification/?msg=database error'; </script>";
}
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "
CREATE TABLE  IF NOT EXISTS user(
    
    email VARCHAR(30) NOT NULL PRIMARY KEY,
    password VARCHAR(32) NOT NULL,
    role VARCHAR(10) NOT NULL,
    company VARCHAR(10) NOT NULL,
    status BOOLEAN NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
";
mysqli_query($conn, $sql);

$pss=md5('5877');
$sql = "
INSERT INTO user (email, password, role,company)
SELECT 'it.ovijat@gmail.com', '$pss','admin','ovijat'
WHERE NOT EXISTS (
    SELECT 1
    FROM user
    WHERE email = 'it.ovijat@gmail.com'
);
";
mysqli_query($conn, $sql);


session_start();


?>