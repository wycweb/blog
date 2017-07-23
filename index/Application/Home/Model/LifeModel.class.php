<?php
namespace Home\Model;
use Think\Model;

class LifeModel extends Model{
    public function search($category){
        $where = 1;
        if ($category != null){
            $where = 'category_id ='.$category;
        }
        // 每页的条数
        $perpage = 5;
        // 获取总的记录数
        $totalRecord = $this->where($where)->count();
        // 生成翻页的对象
        $page = new \Think\Page($totalRecord, $perpage,'','life/p');
//        $page = new \Think\Page($totalRecord, $perpage,'','life');
        return array(
            'data' =>$this->join('RIGHT JOIN blog_category ON blog_category.cat_id = blog_life.category_id')->order('date DESC')->limit($page->firstRow, $page->listRows)->where($where)->select(),
            'page' => $page->show(), // 翻页的字符串
        );
    }
}