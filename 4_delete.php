<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    if($conn){
        $sql = 'DELETE FROM student where id=7;';

        if(mysqli_query($conn, $sql)){
            echo 'deleted';
        }
    }
    else{
        echo 'Not Connected';
    }

?>