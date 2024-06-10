<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" name="f1">
            <!-- Enter The Balnce You Want to Send : <input type="number" name="n1" onblur="Balance(this.val)"> -->
             Enter Your Acc Num: <input type="number" name="n1" onblur="Balance(this.value)">
            <div id="response"></div>
        </form>

        <script>
            function Balance(bal){
                var xmlhtml= new XMLHttpRequest();
                xmlhtml.onreadystatechange=function(){
                    if(this.readyState==4 && this.status==200){
                        document.getElementById("response").innerHTML=this.responseText;
                    }
                }
                xmlhtml.open("GET","Check_Balance.php?u="+bal,true)
                xmlhtml.send();
            }
        </script>
</body>
</html>