<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <form action="Register_Emp.php" method="post">
        Name <input type="text" name="name"><br>
        Roll <input type="number" name="roll"><br>
        Gender <input type="radio" name="gender" value="Male">Male <input name="gender" type="radio" value="Female">Female <br>
        Skills <input type="checkbox" name="skills[]" value="java"> Java <input type="checkbox" value="python" name="skills[]">Python <input value="php" type="checkbox" name="skills[]">PHP <br>
        Select Your Country <select name="country" id="">
            <option value="none">None</option>
            <option value="Pakistan">Pakistan</option>
            <option value="India">India</option>
            <option value="Australia">Australia</option>
            <option value="England">England</option>
            <option value="South Africa">South Africa</option>
        </select><br>
        <input type="submit">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=$_POST["name"];
    $roll=$_POST["roll"];
    $gender=$_POST["gender"];
    $skills = $_POST["skills"];     
    $country=$_POST["country"];
    $conn= new mysqli('localhost','root','','week_5');
    $java = 0;
    $python = 0;
    $php = 0;
    if($conn->connect_error){
        die("Connection could not be established".$conn->connect_error);
    }
    else{
        foreach ($skills as $skill) {
            if ($skill == 'java') {
                $java = 1;
            } elseif ($skill == 'python') {
                $python = 1;
            } elseif ($skill == 'php') {
                $php = 1;
            }
        }
       
        $q = "INSERT INTO employee (Name, Roll, Gender, Country, Java, Python, PHP)
        VALUES ('$name','$roll','$gender','$country','$java','$python','$php')";
             if($conn->query($q)){
                echo "Your are Registered Succesfully";
             }
             else{
                echo "Error";
             }
        
    }   
}
    ?>
</body>
</html>