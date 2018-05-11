<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function user(){
    $user = D('buy')->where('uid='.session('id'))->select();
		foreach ($user as $key => $value) {
			$moviename = D('moviename')->where('id='.$value['mid'])->find();
			$user[$key]['name'] = $moviename['name'];
			$movie = D('movie')->where('id='.$value['cid'])->find();
			$user[$key]['cinema'] = $movie['cinema'];
			$user[$key]['time'] = $movie['time'];
			$user[$key]['date'] = $movie['date'];
		}
		$this->assign('user',$user);
		$this->display();
}
}