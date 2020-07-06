<?php
    $str = array
    (
        'hello1' => 'hello',
        'hello2' => 'hello, world',
        'hello3' => 'ようこそ',
    );
    $str['hello4'] = 'ハロー、ワールド'; 
    
    var_dump(array_keys($srt));
    var_dump(array_values($srt));
    var_dump(array_key_exists('hello1', $srt));
    var_dump(array_key_exists('hello2', $srt));
    var_dump(array_key_exists('hello3', $srt));
    var_dump(array_key_exists('hello4', $srt));
    foreach($str as $keys => $values)
    {
        echo $values.'<br>';
    }