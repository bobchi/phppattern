<?php
class ProductDataCenter
{
    static $objList = [];
    static function set($k,$v)
    {
        self::$objList[$k] = $v;
    }
    static function get($k)
    {
        return self::$objList[$k];
    }
    static function remove($k){
        unset(self::$objList[$k]);
    }
    static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        $ret = [];
        foreach (self::$objList as $k=>$v)
        {
            if(method_exists($v, $name)){
                $v->$name($arguments) && $ret[] = $v->$name($arguments);
            }
        }
        return $ret;
    }
}