<?php 
    //データベースから店舗の情報を取得
    //データベースと接続するグローバル変数を宣言
    global $wpdb;
    //データベースと接続して、テーブルから情報を取得
    $db = $wpdb->get_results('SELECT * FROM $wpdb->shop_data');
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo get_stylesheet_uri() ; ?>">
    <title></title>
</head>
<body>
    <?php foreach($db as $value): ?>
        <div class = "my_shop"><?php  ?>
            <img class = "img_shop" src="<?php echo $value->shop_photo; ?>g" alt="">
            <p class = "my_text"><?php echo $value->shop_name; ?><br><?php echo '利用時間：'.$value->shop_time; ?><br>
            <?php echo 'メニュー：'.$value->shop_mune; ?><br><?php echo '住所：'.$value->shop_address; ?></p>
            <?php include('myfunc_modal.php'); ?> 
        </div>
    <?php endforeach ?>
</body>
</html>