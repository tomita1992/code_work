<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPフォーム検証</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table>
            <th>
                <tr></tr>
                <tr><input type="text" name="name"></tr>
                <tr><input type="text" name="pass"></tr>
                <tr><button>送信</button></tr>
            </th>
        </table>
    </form>
</body>
</html>