<?php 
    function upload()
    {
        //ファイルがアップロードされかどうかをチェック
        if(!(isset($_FILES['avatar'])))
        {       
            //ファイルがアップロードされなかった
            $GLOBALS['message'] = 'ファイルをアップロードしてください';
            return;
        }
        
        //アップロードされたファイルの情報代入する
        $avatar = $_FILES['avatar'];
        
        //アップロードされたファイルのエラー情報をチェック
        if($avatar['error'] != UPLOAD_ERR_OK)
        {
            //アップロード失敗
            $GLOBALS['message'] = 'アップロード失敗した';
            return;
        }
        
        //アップロードされたファイルのパスを代入
        $source = $avatar['tmp_name'];
        //移動先を決める
        $target = './upload/'. $avatar['name'];
        //アップロードされたファイルをWebサイト中に移動する
        $uploaded_file = move_uploaded_file($source, $target);
        
        if(!$uploaded_file)
        {
            //アップロード失敗
            $GLOBALS['message'] = 'アップロード失敗した';
            return;
        }
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
  
        upload();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アップロード</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
        <input type="file" name = "avatar">
        <button>確認</button>
        <?php if(isset($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif ?>
    </form>
</body>
</html>