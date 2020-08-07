<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel;

class UserController extends Controller
{
    /**
     * 注册视图
     */
    public function reg()
    {
        return view('user.reg');
    }

    /**
     * 注册逻辑
     */
    public function regDo(Request $request)
    {
        $post = $request->input();
        if(empty($post['user_name'])){
            echo "<script>alert('用户名必填');window.history.go(-1);</script>";
            die;
        }

        if(empty($post['email'])){
            echo "<script>alert('邮箱必填');window.history.go(-1);</script>";
            die;
        }

        if(empty($post['tel'])){
            echo "<script>alert('手机号必填');window.history.go(-1);</script>";
            die;
        }


        if(empty($post['pwd'])){
            echo "<script>alert('密码必填');window.history.go(-1);</script>";
            die;
        }

        //验证确认密码
        if(empty($post['pwd2'])){
            echo "<script>alert('确认密码必填');window.history.go(-1);</script>";
            die;
        }else if ($post['pwd2'] != $post['pwd']){
            echo "<script>alert('确认密码与密码不一致');window.history.go(-1);</script>";
            die;
        }

        // 判断用户名,邮箱,手机号是否已经存在
        $u = UserModel::where(['user_name'=>$post['user_name']])->first();
        if($u){
            echo "<script>alert('用户名已存在');window.history.go(-1);</script>";
            die;
        }
        $u = UserModel::where(['email'=>$post['email']])->first();
        if($u){
            echo "<script>alert('邮箱已存在');window.history.go(-1);</script>";
            die;
        }
        $u = UserModel::where(['tel'=>$post['tel']])->first();
        if($u){
            echo "<script>alert('手机号已存在');window.history.go(-1);</script>";
            die;
        }

        $pwd = password_hash($post['pwd'],PASSWORD_BCRYPT);
        $userInfo = [
            'user_name' => $post['user_name'],
            'email'     => $post['email'],
            'tel'       => $post['tel'],
            'pwd'       => $pwd,
            'add_time'  => time()
        ];

        $uid = UserModel::insertGetId($userInfo);
        if($uid>0){
            echo "<script>alert('注册成功',location='/login');</script>";
        }else{
            echo "<script>alert('注册失败',location='/reg');</script>";
        }
    }

    /**
     * 登陆视图
     */
    public function login()
    {
        return view('user.login');
    }

    /**
     * 登陆逻辑
     */
    public function loginDo(Request $request)
    {
        $u = $request->input('u');
        $pwd = $request->input('pwd');
        $res = UserModel::where(['user_name'=>$u])->orWhere(['email'=>$u])->orWhere(['tel'=>$u])->first();
        if($res == NULL){
            echo "<script>alert('用户不存在,请先注册用户!');location='/reg'</script>";
        }

        if(password_verify($pwd,$res->pwd)){
            echo "<script>alert('登陆成功,正在跳转至新闻页');location='/index'</script>";
        }else{
            echo "<script>alert('密码不正确,请重新输入...');window.history.go(-1);</script>";
        }
    }
}
