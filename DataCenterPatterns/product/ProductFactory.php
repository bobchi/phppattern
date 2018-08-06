<?php
require 'IProduct.php';
require 'ProductDataCenter.php';
require 'ProLoadTemplate.php';
class ProductFactory
{
    static function getProduct($type){
        $obj=false;
        if(!class_exists($type))
        {
            require $type.'.php';
        }
        switch ($type)
        {
            case 'Books':
                $obj = new Books();
                break;
            case 'Dogs':
                $obj=new Dogs();
                break;
            case 'Wines':
                $obj = new Wines();
                break;
        }
        if(is_subclass_of($obj,'IProduct')) // $obj 是否继承于 IProduct
            ProductDataCenter::set($type,$obj);
        return null;
    }
}