<!-- 店舗一覧　ダイヤログ -->
<!DOCTYPE html>
<html lang = "js">
<head>
   <meta charset = "utf-8">
   <title></title>
   <link rel = "stylesheet" type = "text/css" href = "http://192.168.12.47:8080/WordPress/wp-content/themes/twentytwenty/assets/css/myfunc_dialog_style.css">
</head>
   <boby>
        <!-- ボダン生成 -->
        <button class = "btn">詳細へ</button>
        <!-- ダイヤログ生成 -->
         <div class = "tc">
            <span class = "close">x</span>
            <p>
              <!-- 店舗写真、説明 -->
              <img class = "ft"  src = "http://192.168.12.47:8080/WordPress/wp-content/themes/twentytwenty/img/1.jpg">
               <figcaption>
                 <p>
                 <strong>
                   <span class= "text">●●●●カフェ<br>
                     利用時間：14時~16時<br>
                     メニュー：ホットコーヒー<br>
                     住所：愛知県名古屋市中区丸の内1-1-1<br>
                   </span>
                 </strong>
                 </p>
               </figcaption>
            </p>
            <!-- gooleマップ埋め込み -->
            <p>
              <iframe 
              width="500" height="230" frameborder="0"
              allowfullscreen="" aria-hidden="false" tabindex="0"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.
              2003090455523!2d136.89019931458952!3d35.17655971509218!2m3!1f0!2f0!3f0!3m2!
              1i1024!2i768!4f13.1!3m3!1m2!1s0x600376c54d285e91%3A0x1fefd8aee149c773!2z44C
              SNDUxLTAwNDIg5oSb55-l55yM5ZCN5Y-k5bGL5biC6KW_5Yy66YKj5Y-k6YeO77yR5LiB55uu77
              yV!5e0!3m2!1sja!2sjp!4v1591944623135!5m2!1sja!2sjp"
              >
              </iframe>
           </p>

         <div class = "bk"></div>

         </div>

         <!-- ダイヤログ表示/消す -->
         <script src = "http://192.168.12.47:8080/WordPress/wp-content/themes/twentytwenty/assets/js/jquery-3.5.1.min.js"></script>
         <script type = "text/javascript">
            $('.btn').click(function()
            {
               $('.tc').fadeIn();
            })
            $('.close').click(function()
            {
               $('.tc').fadeOut();
            })
         </script>
   </boby>
</html>
