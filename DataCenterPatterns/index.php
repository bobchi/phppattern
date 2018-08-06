<?php
require 'product/ProductFactory.php';
//require 'product/ProductDataCenter.php';


// 工厂模式获取数据
//$obj = ProductFactory::getProduct('Dogs');
//var_export($obj->getList());


// 数据中心模式
ProductFactory::getProduct('Books');
//ProductFactory::getProduct('Dogs');
//var_export(ProductDataCenter::getList());
//echo '<hr>';
//ProductDataCenter::remove('Dogs');

//var_export(ProductDataCenter::getList());

$child = ProductDataCenter::getChild(104);

var_export($child);