<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Create
    setcookie("x","1234",time()+(846400*30),"/");
    echo $_COOKIE["x"];
    //Now to Delete
    // setcookie('x','',time()+(84600*30),"/");
    if($_COOKIE["x"]>0){
        echo $_COOKIE["x"];
    }
    else{
        echo "Cookie not found";
    }
    //Alternative way to dlt a cookie
    setcookie('x','',time()+(-5),"/");
    
    ?>
</body>
</html>