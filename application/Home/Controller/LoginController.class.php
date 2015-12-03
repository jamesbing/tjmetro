<?php
namespace Home\Controller;
use Think\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author James@NKU
 */
class LoginController extends Controller{
    //put your code here
    /**
     * 用户登录功能，判断用户权限，并跳转至不同页面
     */
    public function login(){
//        框架测试部分代码，测试页面跳转以及信息传递
//        start：
//        $user_name  = $_POST("user_name");
//        $password = $_POST("password");
//        $data = $_POST;
//        dump($data);
//        echo("测试跳转，跳转成功！用户名：" . $user_name . ",密码：" . $password);
//        ：end
//        不建议直接使用$_POST方式，因为要相信任何用户输入的数据都是不可靠的。
//        TP中有个方法叫做I()
//        $username = I('post.user_name');
//        $password = I('post.password');
//        dump($username);
//        dump($password);
//        
        /**
         * 正式业务代码开始
         */
//        从前台获取用户名密码，并且去数据库进行比对
        $user_name = I('post.user_name');
        $password = I('post.password');
        $User = M('User');
        $result = $User->where('user_name="'.$user_name.'"')->find();
        $passwordInDb = $result['password'];
//        dump($result);
        if($passwordInDb == $password){
            dump("Login Success!");
            //@TODO 进行权限判断，并且根据权限和角色跳转至不同的界面
        }  else if($passwordInDb == "" || $passwordInDb == null){
            dump("尚未注册系统！");
            //@TODO尚未并非系统用户，跳转至提示注册或者申请分配的页面
        }else if($passwordInDb != $password){
            dump("密码不正确！");
            //@TODO密码不正确，跳转到密码不正确的提示页面，比如重新输入密码或者找回密码
        }
    }
}
