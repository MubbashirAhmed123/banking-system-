<?php 

        $conn=new mysqli("localhost","root","","bankinfo");
        if(!$conn){
            die(mysqli_error($conn));
        }

?>