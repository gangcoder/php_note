<?php
/**
 * callback 回调类型示例
 */

// 函数回调
function my_callabck_function()
{
    echo "hello world\n";
}
call_user_func('my_callabck_function');

// 4 种对象与方法回调示例
class MyClass
{
    public static function myCallbackMethod()
    {
        echo 'hello world';
    }
}
// 1. 使用类名
call_user_func(['MyClass', 'myCallbackMethod']);

// 2. 使用对象
$obj = new MyClass();
call_user_func(array($obj, 'myCallbackMethod'));

// 3. 使用静态调用名 >= PHP 5.2.3
call_user_func('MyClass::myCallbackMethod');

// 4. 调用父方法 PHP 5.3.0
class A
{
    public static function who()
    {
        echo "A\n";
    }
}

class B extends A
{
    public static function who()
    {
        echo "B\n";
    }
}
call_user_func(array('B', 'parent::who')); // A

// 匿名回调
$double = function ($a) {
    return $a * 2;
};

$ret = call_user_func($double, 2);
var_dump($ret);
