<?php
class Dogs implements IProduct {
    function getList(){
        return [
            ['prod_id'=>201,'prod_name'=>'二哈'],
            ['prod_id'=>202,'prod_name'=>'癞皮狗'],
            ['prod_id'=>203,'prod_name'=>'马犬'],
            ['prod_id'=>204,'prod_name'=>'老狗'],
        ];
    }
}