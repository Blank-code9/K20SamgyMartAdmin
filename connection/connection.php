<?php


function connection(){
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "data";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        echo $conn->connect_error;
    }else{
        return $conn;
    }

}
?>