<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'sms');

    if($conn){
        $sql = 'SELECT * FROM student';

        $result = mysqli_query($conn, $sql);
?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Class</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
    

<?php
    while($row = mysqli_fetch_assoc($result)){
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['class_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['age']; ?></td>
    </tr>
<?php 
    }
?>
</table>
    <?php

    }
    else{
        echo 'Not Connected';
    }

?>