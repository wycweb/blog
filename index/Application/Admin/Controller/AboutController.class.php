<?php
namespace Admin\Controller;
use Think\Controller;
class AboutController extends CommonController{
    public function edit(){
        $model = D('About');
        $about = $model->find();
        if(IS_POST) {
            $data['describe']=I('describe');
            if($model->create($data)){
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
        $this->assign('about',$about);
        $this->display();
    }
}
?>