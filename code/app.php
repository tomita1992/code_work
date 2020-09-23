<?php 

spl_autoload_register("func1");

function func1($className)
{

}

$student = new Student();
$teacher = new Teacher();