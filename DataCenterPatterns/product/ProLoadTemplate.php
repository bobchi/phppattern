<?php
abstract class ProLoadTemplate
{
    function loadData($id,$type){
        $this->setCommon();
        $this->setClick($id);
        $this->setLog($id);
        // 执行数据库方法，根据$type不同，返回不同数据
        return new class($id,$type){
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

    // 更新点击量
    abstract function setClick($id);
    // 运行日志
    abstract function setLog($id);
    //通用方法
    function setCommon(){
        echo '通用方法<hr>';
    }
}