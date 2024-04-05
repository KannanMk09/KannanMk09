<?php


//Database Connection

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "portfolio";

$conn = mysqli_connect($servername,$user,$password,$dbname);

if($conn){

}
else{
    echo "Something Went Wrong";
}

?>