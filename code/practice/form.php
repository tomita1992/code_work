<?php 
    header('Content-Type: text/html');
    header('Location: music.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
</head>
<body>
    <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "post" enctype="multipart/form-data"> 
        <table>
            <tr>
                <td><label for="user_id">ログインID</label></td>
                <td><input type="text" name = "user_id" id = "user_id"></td>
            </tr>
            <tr>
                <td><label for="password">パスワード</label></td>
                <td><input type="password" name = "password" id = "password"></td>
            </tr>
            <tr>
                <td><label for="confirm">パスワード確認</label></td>
                <td><input type="password" name = "confirm" id = "confirm"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name = "agree">利用規約</td>
            </tr>
            <tr>
                <td></td>
                <td><button>登録</button></td>
            </tr>
        </table>
    
    
    </form>
</body>
</html>