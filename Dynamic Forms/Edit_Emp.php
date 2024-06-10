<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <?php
    $conn= new mysqli('localhost','root','','week_5');
    $roll=$_GET["Roll"];
    $q="SELECT * FROM employee WHERE Roll=$roll";
    if($conn->connect_error){
        die('Connection failed '.$conn->connect_error);
    }
    else{
        $records=$conn->query($q);
        $row=$records->fetch_assoc();
        $n=$row["Name"];
        $r=$row["Roll"];
        $c=$row["Country"];
        $g=$row["Gender"];
        $j=$row["Java"];
        $py=$row["Python"];
        $php=$row["PHP"];
        echo "<form action='Update_Emp.php' name='f1' method='post'>";
        echo "<h2>You Can Edit Your Record Here</h2>";
        echo "<h3>Change Your Credentials and hit Update</h3>";
        echo "Name: <input type='text' name='name' value='$n'> <br>";
        echo "<input type='number' name='roll' value='$r' hidden>";
        if($g=='Male'){
            echo "Gender <input type='radio' name='gender' value='Male' checked>Male <input name='gender' type='radio' value='Female'>Female <br> ";
        }
        else{
            echo "Gender <input type='radio' name='gender' value='Male'>Male <input name='gender' type='radio' checked value='Female'>Female <br> ";
        }
        if($j==1 && $py==1 && $php==1){
            echo "Skills <input type='checkbox' name='skills[]' value='java' checked> java <input type='checkbox' value='python' name='skills[]' checked> Python <input value='php' type='checkbox' name='skills[]' checked> PHP<br>";
        }
        else if($j==0 && $py==0 && $php==0){
            echo "Skills <input type='checkbox' name='skills[]' value='java'> java <input type='checkbox' value='python' name='skills[]'> Python <input value='php' type='checkbox' name='skills[]'> PHP <br>";
        }
        else if($j==1 && $py==1){
            echo "Skills <input type='checkbox' name='skills[]' value='java' checked> java <input type='checkbox' value='python' name='skills[]' checked> Python <input value='php' type='checkbox' name='skills[]'> PHP <br>";
        }
        else if($py==1 && $php==1){
            echo "Skills <input type='checkbox' name='skills[]' value='java'> java <input type='checkbox' value='python' name='skills[]' checked> Python <input value='php' type='checkbox' name='skills[]' checked> PHP <br>";
        } 
        else if($j==1 && $php==1){
            echo "Skills <input type='checkbox' name='skills[]' value='java' checked> java <input type='checkbox' value='python' name='skills[]'> Python <input value='php' type='checkbox' name='skills[]' checked> PHP <br>";
        }
        else if($j==1){
            echo "Skills <input type='checkbox' name='skills[]' value='java' checked> java <input type='checkbox' value='python' name='skills[]'> Python <input value='php' type='checkbox' name='skills[]'> PHP <br>";
        }   
        else if($py==1){
            echo "Skills <input type='checkbox' name='skills[]' value='java'> java <input type='checkbox' value='python' name='skills[]' checked> Python <input value='php' type='checkbox' name='skills[]'> PHP <br>";
        }   
        else if($php==1){
            echo "Skills <input type='checkbox' name='skills[]' value='java'> java <input type='checkbox' value='python' name='skills[]'> Python <input value='php' type='checkbox' name='skills[]' checked> PHP <br>";
        }
        if (isset($_POST["skills"])) {
            $skills = $_POST["skills"];
            foreach ($skills as $skill) {
                if ($skill == 'java') {
                    $java = 1;
                } elseif ($skill == 'python') {
                    $python = 1;
                } elseif ($skill == 'php') {
                    $php = 1;
                }
            }
        }
       
       echo "Select Your Country <select name='country' id=''>";
        $q2="SELECT * FROM countries";
        $records2=$conn->query($q2);

        echo "<option value='$c_id'>$c</option>";
        while($row2=$records2->fetch_assoc()){
            $c_name=$row2["country"];
            if($c!=$c_name){
                echo "<option value='$c_name'>$c_name</option>";
            }
            
        }
        echo "</select>";
        echo "<input type='submit' value='Update_Record'>";

    }




    ?>
<body>
   
</body>
</html>