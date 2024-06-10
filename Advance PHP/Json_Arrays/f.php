<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Associative array to json
    $x=array("Ali"=>18,"Nasir"=>19,"John"=>39,"Dave"=>45);
    $json_x=json_encode($x);
    //we have to decode before printing it 
    $y=json_decode($json_x);
    foreach ($y as $e => $a) {
        echo "Name: $e, Age : $a <br>";
    }
    //Simple array to json
    $x=array("wwe","aew","tna","ufc");
    $json_p=json_encode($x);
    $p=json_decode($json_p);

    foreach($p as $e){
        echo "$e <br>";
    }
    //Json to Associative Array
    $json_a = '{"Babar":29,"Naseem":22,"Kohli":34,"Dhoni":41}';
    $decoded_array = json_decode($json_a);
    foreach ($decoded_array as $key => $value) {
        echo "Key: $key, Value: $value <br>";
    }
    //To print an individual element
    echo $decoded_array->Kohli; //working to print an individual element in associative array

    //Json to Simple Array
    $simple_a=json_decode($json_a,true);
    echo $simple_a["<br>Naseem"]//working to print an individual element in simple array
    ?>
</body>
</html>