<?php 
    
    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(empty($_POST['path']))
        {
            return;
        }
        $img_save = $_POST['path'];
        echo $img_save;
    }