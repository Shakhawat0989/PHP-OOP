<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("connection Failed :" . $conn->connect_error);
}

$sql = "SELECT *FROM students";
$result = $conn->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "id : {$row["id"]} - Name : {$row["students_name"]} - Age : {$row["age"]}<br>";
    }
}
else{
    echo "Result not found";
}

$conn->close();

?>