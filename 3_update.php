<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    if($conn){
        $sql = 'UPDATE student SET name = "Raz", age="23" where id = 2;';

        if(mysqli_query($conn, $sql)){
            echo 'updated';
        }
    }
    else{
        echo 'Not Connected';
    }

?>