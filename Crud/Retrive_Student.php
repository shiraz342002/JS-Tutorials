<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>You Can view Your Record Here</h2>

    <form action="Retrive_Student.php" method="post">
       Click to view all students data <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn= new mysqli('localhost','root','','kfuiet');
    if($conn->connect_error){
        die('Connection failed '.$conn->connect_error);
    }
       $q2="SELECT * FROM student";
        $result=$conn->query($q2);
        while ($row = $result->fetch_assoc()) {
            echo "Name: " . $row["Name"] . " - Roll: " . $row["Roll"] . " City: " . $row["City"] . " ";
            echo "<a href='Edit_Student.php?Roll=" . $row["Roll"] . "'>Edit</a> ";
            echo "<a href='Delete_Student.php?Roll=" . $row["Roll"] . "'>Delete</a><br>";
        }
    }
    ?>
</body>
</html>