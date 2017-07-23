<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $information = M('information')->find(1);
        //最新文章
        $newArticle = M('life')->field('id,title')->order('date DESC')->limit(8)->select();
        //点击排行文章
        $clickArticle = M('life')->field('id,title')->order('views DESC')->limit(8)->select();
        //推荐文章
        $commendArticle = M('life')->alias('a')->join('RIGHT JOIN blog_category b ON a.category_id = b.cat_id ')->order('date DESC')->limit(8)->where('commend=1')->select();
        $this->assign(array(
                'information' =>$information,
                'newArticle' =>$newArticle,
                'clickArticle' =>$clickArticle,
                'commendArticle'=>$commendArticle,
            ));
        $this->display();
    }
}