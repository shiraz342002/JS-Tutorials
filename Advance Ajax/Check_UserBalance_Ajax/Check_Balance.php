<?php
    $acc=$_GET["u"];
    $conn = new mysqli('localhost', 'root', '', 'kfuiet');
    $q="SELECT Balance FROM bank WHERE acc_no ='$acc'";
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $records=$conn->query($q);
        if($records->num_rows>0){
            $row=$records->fetch_assoc();
            $balance=$row["Balance"];
            echo "Your Balance is $balance ";
        }
        else{
            echo "Account deosnot exist";
        }

    }

?>