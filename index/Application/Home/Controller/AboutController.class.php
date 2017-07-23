<?php
namespace Home\Controller;
use Think\Controller;
class AboutController extends Controller {
    public function index(){
        $information = M('information')->find(1);
        $about = M('about')->find(1);
        $this->assign('information',$information);
        $this->assign('about',$about);
        $this->display();
    }
}