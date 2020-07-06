<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_style.css" type = "text/css">
    <title>ログイン</title>
</head>
<body>
    <form action = "foo.php" method = "get">
        <div id = "form">
            <div class = "form1">
                <table border = "1">
                    <tr>
                        <td>ログインID</td>
                        <td><input type="text" name = "user_id"></td>
                    </tr>
                    <tr>
                        <td>パスワード</td>
                        <td><input type="text" name = "user_password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" value = "ログイン"></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>
</body>
</html>