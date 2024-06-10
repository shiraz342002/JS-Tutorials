<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="f1" action="Login_Verification.php" method="post">
    <h1>Log in </h1>
    UserName: <input type="text" name="t1" id="t1"><br>
    Password: <input type="text" name="t2" id="t2">
    <input type="submit" value="Login">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){

        $u_name=$_POST['t1'];
        $u_pass=$_POST['t2'];
        $conn= new mysqli('localhost','root','','kfuiet');
        $q = "SELECT * FROM login WHERE User_Name='$u_name' AND Password='$u_pass'";
        
        if($conn->connect_error){
            echo "Connection Not established";
        }
        else{
            $record=$conn->query($q);
            if($record->num_rows>0){
                $_SESSION["username"]=$u_name;
                header("location:Home.php");
            }
            else{
                
                header("location:Login_Verification.php");
            }
            
        }
    }

    ?>
</body>
</html>