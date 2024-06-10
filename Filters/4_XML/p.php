<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $xml=simplexml_load_file("tut.xml") or die ("Error");
    echo $xml->name;
    print_r($xml);


?>
</body>
</html>