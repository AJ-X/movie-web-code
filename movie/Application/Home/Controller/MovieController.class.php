<?php
namespace Home\Controller;
use Think\Controller;
class MovieController extends Controller {
    public function movie(){
        if (IS_POST) 
		{
			$cinema = D('movie');
			if (!$data = $cinema->create()) 
			{
				header("Content-type: text/html; charset=utf-8");
				exit($login->getError());
			}			
			$result = $cinema->where($data)->find();
			if (!empty($result)) 
			{
				$this->redirect('movie/seat?id='.$result['id']);
			} 
			else 
			{
				$this->error('该日该电影无场次!');
			}
		} 
		else 
		{
			$this->display();
		}
    }
    public function seat()
	{
		$this->assign('cid',I('get.id'));
        $this->display();		
	}
}