<?php
    
    $test1 = 'abcd';
    $test2 = 'efgh';
    $html1 = "<p>{$test1}</P>";
    $html2 = "<p>$test2</P>";
    
    echo $html1, $html2;