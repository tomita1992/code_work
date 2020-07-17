<?php 
    
    $connection = @mysqli_connect('127.0.0.1', 'root', 'root', 'test');
    if(!$connection)
    {
        exit('<h1>エラー1</h1>');
    }

    $query = mysqli_query($connection, 'select * from user_date2');

    if(!$query)
    {
        exit('<h1>エラー2</h1>');
    }
    while($row = mysqli_fetch_assoc($query))
    {
        var_dump($row);
    }

    mysqli_free_result($query);
    mysqli_close($connection);
    