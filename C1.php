<?php

trait Logger1{
    public function log1(){ echo "1";return;}
}
class C1
{

    const AAA = 5;
    public static $a = 5;
    public $a1 ;
    public $var1;

    public function __construct()
    {
        
    }
    public function func1()
    {
        echo "<br/> hi from C1 <br/>";
    }

    protected function func2()
    {
        $this->func1();
        $this->var1;
    }
    public static $var3;

    public static function funcs()
    {
        self::$var3;
        static::$var3;
    }
}
interface IUser
{
    public function func10();
}

class C2 extends C1 implements IUser
{
    use Logger1;

    public function func10()
    {
        // TODO: Implement func10() method.
    }
}
//C1::$var3;
$c2=new C2();
$c2->log1();




