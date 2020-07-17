<?php
    
    $test1 = 'abcd';
    $test2 = 'efgh';
    $html1 = "<p>{$test1}</p>";
    $html2 = "<p>$test2</p>";
    
    echo $html1, $html2;