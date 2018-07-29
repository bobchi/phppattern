<?php
class Books implements IProduct{
    function getChild($params){
        return new class($params[0]){
            function __construct()
            {
                $arr = ['prod_id'=>104,'prod_name'=>'教科书'];
                foreach ($arr as $k=>$v)
                {
                    $this->$k = $v;
                }
            }
        };

    }
    function getList(){
        return [
            ['prod_id'=>101,'prod_name'=>'红皮书'],
            ['prod_id'=>102,'prod_name'=>'白皮书'],
            ['prod_id'=>103,'prod_name'=>'小黄书'],
            ['prod_id'=>104,'prod_name'=>'教科书'],
        ];
    }
}