<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Integer Within a Range
    $int = 122;
    $min = 1;
    $max = 200;
    if (!filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max)))) {
        echo("Variable value is not within the legal range");
      } else {
        echo("Variable value is within the legal range");
      }
    //Check Ipv6
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
    if(!filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV6)){
        echo "<br>Invalid Ipv6";
    }
    else{
        echo "<br> valid Ipv6";

    }

    // Check url with Query String
    $url2 = "https://example.com/page?param1=value1&param2=value2";
    if (filter_var($url2, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
        echo("<br>$url2 is a valid URL with a query string");
    } else {
        echo("<br>$url2 is not a valid URL with a query string");
    }

    $url3 = "http://example.com/page";

if (filter_var($url3, FILTER_VALIDATE_URL)) {
    echo("<br>$url is a valid URL");
} else {
    echo("<br>$url is not a valid URL");
}

    
    //Remove html Tags 
    $str = "<br><h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;

    ?>
</body>
</html>