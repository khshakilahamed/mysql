<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    if($conn){
        $sql = 'SELECT * FROM student';

        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            // echo "ID: ".$row['id'];
            echo "name: ".$row['name'].", Id: ".$row['id'].", age: ".$row['age'];
            echo "<br>";
        }
    }
    else{
        echo 'Not Connected';
    }

?>