<?php
    echo time(),'<br>';
    
    $date = date('Y-m-d H:i:s', time());
    echo $date,'<br>';

    echo date('Y年m月d日 H時i分s秒', strtotime($date)),'<br>';
    define('SYSETM', 'sub');
    
    echo SYSETM;