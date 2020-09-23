<?php 

    $name = 'tomita';
    function get_name($name){
        global $age; 
        $age = 22;
        echo $name;
    }
    
    function get_age(){
        echo $age;
    }
    get_name($name);
    get_age();