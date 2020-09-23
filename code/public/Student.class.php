<?php 

class Student
{
    private string $name = "富田";
    private int $age = 28;
    public function __construct()
    {
        echo "名前：{$this->name} 年齢：{$this->age}";
    }
}