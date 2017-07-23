<?php
namespace Admin\Controller;
use Think\Controller;
class LifeController extends CommonController {

    public function lst(){
        $model = D('Life');
        $count=$model->count();// 查询满足要求的总记录数
        $Page= new \Think\Page($count,8);
        $show=$Page->show();
        $list = $model->field('id,title,date,thumbnail,category')->join('LEFT JOIN blog_category ON blog_category.cat_id = blog_life.category_id')->order('date DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }

    public function add(){
        $article = D('life');
    	if(IS_POST){
            $data['title']=I('title');
            $data['author']=I('author');
            $data['content']=I('content');
            $data['describe']=I('describe');
            $data['category_id']=I('category_id');
            $data['commend']=I('commend');
            $data['date'] = time();
            if($_FILES['thumbnail']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $info   =   $upload->uploadOne($_FILES['thumbnail']);
                if(!$info){
                    $this->error($upload->getError());
                }else{
                   $data['thumbnail']=$info['savepath'].$info['savename'];
                }
            }
            if($article->create($data)){
                if($article->add()){
                    $this->success('添加文章成功！',U('lst'));
                }else{
                    $this->error('添加文章失败！');
                }
            }else{
                $this->error($article->getError());
            }

            return;
    	}
        $category = D('category')->select();
        $this->assign('category',$category);
        $this->display();
    }

    public function edit(){
        $model = D('Life');
        if(IS_POST){
            $data['title']=I('title');
            $data['author']=I('author');
            $data['content']=I('content');
            $data['describe']=I('describe');
            $data['category_id']=I('category_id');
            $data['id']=I('id');
            if($_FILES['thumbnail']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $info   =   $upload->uploadOne($_FILES['thumbnail']);
                if(!$info){
                    $this->error($upload->getError());
                }else{
                   $data['thumbnail'] = $info['savepath'].$info['savename'];
                }
            }
            if($model->create($data)){
                $save=$model->save();
                if($save !== false){
                    $this->success('修改文章成功！',U('lst'));
                }else{
                    $this->error('修改文章失败！');
                }
            }else{
                $this->error($model->getError());
            }

            return;
        }
        $articles=$model->find(I('id'));
        $this->assign('articles',$articles);
        $category = D('Category')->select();
        $this->assign('category',$category);
        $this->display();
    }

    public function del(){
        $model = D('Life');
        if($model->delete(I('id'))){
            $this->success('删除文章成功！',U('lst'));
        }else{
            $this->error('删除文章失败！');
        }
    }



}