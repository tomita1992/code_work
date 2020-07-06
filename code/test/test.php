<?php

//ログイン情報を取得
//$user_data = wp_get_current_user();
$user_id = 'test5';
$user_email = 'test5@abc.com';

//データベースの情報を代入する
 $dsn = 'mysql:host = localhost; dbname = test; charset = utf8';
 $user_db = 'root';
 $password = 'root';

 error_reporting(E_ALL & ~E_NOTICE);

 //データベースと接続する
    try
    {
        $db = new PDO($dsn, $user_db, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "接続成功!!"."<br>";
    }
    catch(PDOException $e)
    {
        echo "データベースに接続できない!!". $e ->getMessage();    
        exit;
    }
    
    //テーブルにデータ追加SQL文を代入
    $qry = "INSERT INTO test.user_date2 (user_id, user_email) VALUES(:user_id, :user_email)";
    echo "SQL文を代入した"."<br>";
    
    //SQL文を実行する    
    $stmt = $db->prepare($qry);
    echo "情報を準備した"."<br>";
    $stmt->bindParam(':user_id' , $user_id, PDO::PARAM_STR);
    $stmt->bindParam(':user_email', $user_email, PDO::PARAM_STR);
    echo "情報を代入した"."<br>";
    $stmt->execute();
   
    echo "情報を追加した"."<br>";
   
    $qry = "SELECT * FROM test.user_date2";
    $data = $db -> query($qry);
    echo "テーブルを取得した"."<br>";
    $i = 1;
    while($value = $data->fetch(PDO::FETCH_ASSOC))
    {
        echo $i."行目取り出した"."<br>";
        echo $value['user_id'].'  '.$value['user_email']. '  '.$value['user_payment'].'<br>';
        $i++;
    }

    $db = null;
    $date = null;
    
?>