<?php 

    $connection = mysqli_connect('127.0.0.1', 'root', 'root', 'test');
    if(!$connection)
    {
        exit("<h1>エラー1</h1>");
    }
    
    $query = mysqli_query($connection, "delete from user_date2 where user_id = 'test5';");

    var_dump($query);
    if(!$query)
    {
        exit("<h1>エラー2</h1>");
    }
    
   $rows = mysqli_affected_rows($connection);

   var_dump($rows); 
   
   mysqli_close($connection);