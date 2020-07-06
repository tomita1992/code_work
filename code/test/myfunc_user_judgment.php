
<!DOCTYPE html>
<html lang = "js">
    <head>
        <meta charset = "utf-8">
        <title></title>
    </head>
    <boby>
    <?php        
        //登録されているユーザーのID,メールアドレスを取得
        $user_id = imri_user;
        //$user_id = $user -> user_login;
        //$user_email = $user -> user_email;
        
        //データベースの情報を代入する
        $dsn = 'mysql:host = localhost:3306; dbname = test; charset = utf8';
        $user = 'root';
        $password = 'root';
    
        //データベースと接続する
        try
        {
            $db = new PDO($dsn, $user, $password);
            print("接続成功"."<br>");
        }catch(PDOException $e)
        {
            $e ->getMessage(); 
            exit;
        }
        //SQL文を発行する
        $sql = "SELECT * FROM test.user_date2";
        //テーブルのデータを取得
        $data = $db->query($sql);
        print("データ取得完了"."<br>");
        //テーブルのデータを一行ずつ取り出す
        while($data_out = $data -> fetch())
        {
            print("データ取り出し"."<br>");
            //現在ログインされているユーザーを判別する
            if($user_id == $data_out['user_id'])
            {
                print("ユーザー判別："."user_id =".$user_id. "  data_out['user_id'] = ". $data_out['user_id']."<br>");
                //ユーザーの支払い状況を判別する
                if($data_out['user_payment'] == 1)
                {
                   //会員証を表示する
                   echo"<h4 class = 'has-text-align-left'>　　　　　　 会員証</h4>
                    <figure class='wp-block-image is-resized size-large'><img 
                    src='http://localhost/WordPress/wp-content/uploads/2020/06/slide_sp_02-1.png' 
                    alt='' class='wp-image-137' width='495' height='378'/><p><strong>ID:  " 
                    .$data_out['user_id']. "</strong></p></figure>";
                    break;
                }else
                {
                    //支払い手続きへを表示する
                    echo "<p>会員証は<a href='http://localhost/%e6%b1%ba%e6%b8%88%e6%89%8b%e7%b6%9a%e3%81%8d%e3%81%b8/' 
                    data-wplink-url-error='true'>支払</a>済みのお客様のみ表示されます</p>";
                    break;
                }
                
                print("ログインIDと異なる");
            }
                
            
            
        }            
        //データベースをクローズ
        $db = null;
        $data = null;
    ?>   
    </boby>
</html>