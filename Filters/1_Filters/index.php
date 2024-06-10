<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Remove tags
  $str = "<h1>Hello World!</h1>";
  $newstr = filter_var($str, FILTER_SANITIZE_STRING);
  echo "$newstr<br>";
    
  //Check Integer
  $a=10;
    if(!filter_var($a,FILTER_VALIDATE_INT)){
        echo ("$a is not an integer");
    }
    else{
        echo ("$a is an integer");

    }
    // Check Valid Ip
    $ip="192.168.1.1";
    if(!filter_var($ip, FILTER_VALIDATE_IP)){
        echo "$ip is not a valid ip";
    }
    else{
        echo "<br>$ip is valid";
    }
    //Check Valid Email Address
    $email="imshiraz007@gmail.com";
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<br> $email is not invalid ";
    }
    else{
        echo "<br> $email is valid ";

    }
    //Check Valid Url
    $url="https://web.whatsapp.com/";
    if(!filter_var($url,FILTER_VALIDATE_URL)){
        echo "<br>$url is not Invalid";
    }
    else{
        echo "<br>$url is valid";
    }

    
    


    ?>
</body>
</html>