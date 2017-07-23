<?php
namespace Home\Controller;
use Think\Controller;
class BoardController extends Controller {
    public function index(){
        $information = M('information')->find(1);
        $this->assign('information',$information);
        $this->display();
    }
}