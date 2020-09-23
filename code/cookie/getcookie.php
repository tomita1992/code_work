<?php 
session_start();

if(!empty($_SESSION)){
    var_dump($_SESSION);
}
if(!empty($_POST['abc']))
{
    echo 111;
}
