<?php 
    session_start(); 
    $_SESSION['name'] = 'xiaohong';
    $_SESSION['age'] = 10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="submit" value="クリック" id="btn">
    
    <script>
        
        let btnObj = document.getElementById('btn');
        btn.onclick = function(){
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'getcookie.php');
            xhr.send('abc=123&err=445');
            
            xhr.onreadystatechange = function(){
                if(this.readyState != 4) return;
                console.log(this.responseText);
            }
        }
    </script>
</body>
</html>