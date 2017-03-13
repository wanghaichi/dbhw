<?php
namespace Home\Controller;
use Admin\Model\MainModel;
use Think\Controller;
class IndexController extends Controller {

    public function index(){

        if($_POST){
            $id = I('post.name');
            $pwd = I('post.pwd');
            $pwd = md5($pwd);
            $dbCon = new MainModel('stuinfo');
            $info = $dbCon->where("`sno` = " . $id)->select();
            if($info){
                if($info[0]['pwd'] == $pwd){
                    session('id', $id);
                    $this->success("登入成功", U('Class/classList'));
                }
                else{
                    $this->error("账号或密码错误", U('login'));
                }
            }
            else{
                $this->error("账号不存在", U('login'));
            }
        }
        else{
            $this->display('login');
        }
    }
}