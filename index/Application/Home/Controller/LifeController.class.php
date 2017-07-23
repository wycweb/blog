<?php
namespace Home\Controller;
use Think\Controller;
class LifeController extends Controller {
    public function index($category = null){
        $information = M('information')->find(1);
        $life = D('life')->search($category);
        $url = __MODULE__.'/Life';
        if (empty($life['data'])) header("Location: $url");
        $cat = M('Category')->order('sort ASC')->select();
        //点击排行文章
        $clickArticle = M('life')->field('id,title')->order('views DESC')->limit(8)->select();
        //推荐文章
        $commendArticle = M('life')->where('commend = 1')->field('id,title')->order('date DESC')->limit(9)->select();
        $navName = null;
        if ($category !=null){
            $navName = M('Category')->find($category);
        }
        $this->assign(
            array(
                'information'=>$information,
                'life' =>$life['data'],
                'page' =>$life['page'],
                'category' => $cat,
                'navName' =>$navName,
                'clickArticle'=>$clickArticle,
                'commendArticle'=>$commendArticle
            )
        );
        $this->display();
    }

    public function article($id = 0){
        $model = D('life');
        $information = D('information')->find(1);
        $cat = M('Category')->select();
        $url = __MODULE__.'/Life';
        $life = $model->where('id='.$id)->find();
        if (empty($life)){
            header("Location: $url");          //当ID值为空的时候，跳转到文章列表
            die();                            //必须结束程序，否则$life['data']为空值，查找上篇文章和查找下篇文章的sql语句会报错
        }
        $model->where('id='.$id)->setInc('views',1);
        //查找上篇文章和下一篇文章
        $prevTitle = $model->field('id,title')->where('date > '.$life['date'])->order('date ASC')->find();     //上一篇文章
        $nextTitle = $model->field('id,title')->where('date < '.$life['date'])->order('date DESC')->find();     //下一篇文章
        // $aboutArticle = $model->field('id,title')->where('category_id='.$life['category_id'])->limit(6)->select();//相关文章的查找
                $map['category_id'] = $life['category_id'];
        $map['id'] = array('neq',$id);
        $aboutArticle = $model->field('id,title')->where($map)->limit(6)->select();//相关文章的查找
        $clickArticle = M('life')->field('id,title')->order('views DESC')->limit(8)->select();                    //点击排行文章
        //推荐文章
        $commendArticle = M('life')->where('commend = 1')->field('id,title')->order('date DESC')->limit(9)->select();
        $navName = M('Category')->find($life['category_id']);
        $this->assign(
            array(
                'life' => $life,
                'information' =>$information,
                'prevTitle' =>$prevTitle,
                'nextTitle' =>$nextTitle,
                'category' => $cat,
                'aboutArticle' =>$aboutArticle,
                'clickArticle' =>$clickArticle,
                'commendArticle' =>$commendArticle,
                'navName' =>$navName
            )
        );
        $this->display();
    }
}