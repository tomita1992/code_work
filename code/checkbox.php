<?php 

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        var_dump($_POST);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action= <?php echo $_SERVER['PHP_SELF']; ?> method = "post">
        <label><input type="radio" name = "gender" value = "male">男</label>
        <label><input type="radio" name ="gender" value = "femle">女</label>
        <br>
        
        <label><input type="checkbox" name = "agree" value = "true">同意</label>

        <br>

        <label><input type="checkbox" name = "funs[0]" value = "football">サッカー</label>
        <label><input type="checkbox" name = "funs[1]" value = "basketball">バスケー</label>

        <br>

        <select name="status">
            <option value = "1">対応済み</option>
            <option value = "2">未対応</option>
            <option value = "3">対応中</option>
        </select>
        <br>

        <input type="file">

        <br>
        
        <button>確認</button>
    </form>

</body>
</html>