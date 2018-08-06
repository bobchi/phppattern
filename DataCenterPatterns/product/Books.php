<?php
class Books extends ProLoadTemplate implements IProduct{

    function getChild($params){
        return parent::loadData($params[0],'Books');
    }

    function getList(){
        return [
            ['prod_id'=>101,'prod_name'=>'红皮书'],
            ['prod_id'=>102,'prod_name'=>'白皮书'],
            ['prod_id'=>103,'prod_name'=>'小黄书'],
            ['prod_id'=>104,'prod_name'=>'教科书'],
        ];
    }

    function setClick($id)
    {
        // TODO: Implement setClick() method.
        echo '图书点击量<hr>';
    }

    function setLog($id)
    {
        // TODO: Implement setLog() method.
        echo '图书日志<hr>';
    }
}