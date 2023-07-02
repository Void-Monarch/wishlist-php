<?php 
include 'database.php';
include 'connect.php';

    $query_select = "select * from userlist";
    $result_select = mysqli_query($connect,$query_select);
    
    if(!$result_select){
        echo '<BR>we have an error<br>';
    }

    while($row = mysqli_fetch_assoc($result_select)){
        ?>
        <pre>
            <?php
        print_r($row);
            ?>
        </pre>
        <?php
    }


?>
