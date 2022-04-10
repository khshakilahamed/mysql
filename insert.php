<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    if($conn){
        $sql = 'INSERT INTO student values(null, "asif", "two", 10);';
        if(mysqli_query($conn, $sql)){
            echo 'inserted';
        }
    }
    else{
        echo 'Not Connected';
    }

?>