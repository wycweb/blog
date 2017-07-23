<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends CommonController {
    
    public function lst(){
        $model = D('Category');
        $category = $model->order('sort ASC')->select();
        $this->assign('category',$category);
        $this->display();
    }

    public function add(){
        $model = D('Category');
    	if(IS_POST){
    		$data['category']=I('category');
            if($model->create($data)){
                if($model->add()){
                    $this->success('添加分类成功！',U('lst'));
                }else{
                    $this->error('添加分类失败！');
                }
            }else{
                $this->error($model->getError());
            }

            return;
    	}
        $this->display();
    }

    public function edit(){
        $cate=D('category');
        if(IS_POST){
            $data['category']=I('category');
            $data['cat_id']=I('cat_id');
            if($cate->create($data)){
                $save=$cate->where()->save();
                if( $save !== false){
                    $this->success('修改栏目成功！',U('lst'));
                }else{
                    $this->error('修改栏目失败！');
                }
            }else{
                $this->error($cate->getError());
            }
            return;
        }
        $cates = $cate->find(I('cat_id'));
        $this->assign('cates',$cates);
        $this->display();
    }

    public function del(){
        $model = D('Category');
        if($model->delete(I('get.cat_id'))){
            $this->success('删除分类成功！',U('lst'));
        }else{
            $this->error('删除分类失败！');
        }
    }

    public function sort(){
        $model = D('category');
        foreach ($_POST as $cat_id => $sort) {
            $model->where(array('cat_id'=>$cat_id))->setField('sort',$sort);
        }
        $this->success('排序成功！',U('lst'));
    }

    
}