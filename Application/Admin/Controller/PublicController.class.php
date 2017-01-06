<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
    //登陆
    public function login(){

      if (isset($_SESSION['username']) ) {
        # code...
          $this->redirect('Index/index');
      }else {
        # code...
        if ($_SERVER['REQUEST_METHOD']=="POST") {
          # code...
          $data['username']=I('post.username');
          $data['password']=I('post.password');


          $user=M('users')->where($data)->find();
          if ($user ==null) {
            # code...
            $this -> error('用户不存在或者密码错误');
          }else {
            # code...
            $_SESSION=$user;
            $this->redirect('Index/index');
          }

          die;
        }else {
          # code...
          $this->display();
        }

      }

    }

    public function readDB(){
       $user = M('users') ->select();
       var_dump($user);
       die;
    }


    //退出
     public function logout()
    {
      session_destroy();
      $this->success('注销成功',U('Home/Index/index'));
    }
}
