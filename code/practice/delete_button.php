<?php 
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
       $id = $_POST['id'];
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SeRVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr>
                <td><label>ID</label></td>
                <td><input type="text" name = "id"></td>
            </tr>
            <tr>
                <td><label>パスワード</label></td>
                <td><input type="text" name = "password"></td>
            </tr>
            <tr>
                <td><label></label></td>
                <td><button>送信</button></td>
            </tr>
        </table>
    </form>
</body>
</html>