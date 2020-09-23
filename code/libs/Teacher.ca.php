<?php 
class Teacher
{
    private string $name = "翔太";
    private int $age = 28;
    public function __construct()
    {
        echo "名前：{$this->name} 年齢：{$this->age}";
    }
}