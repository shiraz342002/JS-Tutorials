<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" name="f1">
        Name : <input type="text" name="n1" oninput="CheckStatus(this.value)">
        <div id="response"></div>
    </form>
    <script>
        function CheckStatus(username){
            var xmlhtml = new XMLHttpRequest();
            xmlhtml.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById("response").innerHTML = this.responseText;
                }
            }
            xmlhtml.open("GET", "check_user.php?u=" + username, true);
            xmlhtml.send();
        }
    </script>
</body>
</html>
