<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>You Can Add a New Your Record Here</h2>

    <form action="Add_Student.php" method="post">
        Name : <input type="text" name="n1"><br>
        Roll : <input type="number" name="r1"><br>
        City : <input type="text" name="c1"><br>
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n=$_POST["n1"];
    $r=$_POST["r1"];
    $c=$_POST["c1"];

    $conn= new mysqli('localhost','root','','kfuiet');
    if($conn->connect_error){
        die('Connection failed '.$conn->connect_error);
    }
    else{
        echo "<br>"."Connected Successfully";
        $q="INSERT INTO student (Name, Roll, City) VALUES ('$n', '$r', '$c')";
        if($conn->query($q)){
            echo "<br>"."Student Registered Successfully"."\n";
        }
    }
}
    ?>
</body>
</html>