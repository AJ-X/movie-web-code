<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
public function login()
{
if (IS_POST) 
{
$login = D('user');     //查找user数据表
if (!$data = $login->create())   //判断  
{
header("Content-type: text ml; charset=utf-8");
exit($login->getError());  //返回错误值
}
$where;
$where['uname'] = $data['uname'];  
$result = $login->where($where)->find();
if (!empty($result) && $result['password'] == $data['password']) 
{
session('uname', $result['uname']);   
session('id', $result['id']); 
$this->success('登录成功', U('index/indexdl'), 2);
} 
else 
{
$this->error('登录失败,用户名或密码不正确!');
}
} 
else 
{
$this->display();
}
}
public function register()
{
if (IS_POST) 
{
$user = D('user');
$map['uname'] = I('post.uname');
$re = $user->where($map)->select();
if (empty($re)) 
{
$data['uname'] = I('post.uname');
}
else
{
$this->error('账号已存在',U('index/index'));
}
if (I('post.password')!=I('post.rpassword')) 
{
$this->error('两次密码不一致',U('index/index'));
}
else
{
$data['password'] = I('post.password');
}
$re = $user->create();
if (!$re) 
{
$this->error($user->getError(),U('index/index'));

}
if ($id = $user->add($data))
{
$this->success('注册成功', U('index/index'), 2);
} 
else 
{
$this->error('注册失败');
}
} 
else 
{
$this->display();
}
}
}