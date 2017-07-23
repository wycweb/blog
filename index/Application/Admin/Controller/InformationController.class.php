<?php
namespace Admin\Controller;
use Think\Controller;
class InformationController extends CommonController{
    public function edit(){
        $model = D('Information');
        if(IS_POST) {
            if($model->create()){
                $save = $model->where('id=1')->save();
                if($save !== false){
                    $this->success('修改成功！',U('edit'));
                    exit();
                }else{
                    $this->error('修改失败！');
                }
            }else{
                $this->error($model->getError());
            }
        }
        $infor = $model->find();
        $this->assign('infor',$infor);
        $this->display();
    }
}