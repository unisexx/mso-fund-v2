<?php
class Infos extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function lists(){
		$data['rs'] = new Info();
		$data['rs']->where('module = "'.$_GET['module'].'" and status="approve"')->get_page();
		$this->template->build('list',$data);
	}
	
	function view($id=false){
		$data['rs'] = new Info($id);
		$this->template->build('view',$data);
	}
	
	function inc_home_1(){
		$data['rs'] = new Info();
		$data['rs']->where('module = "ข่าวจัดซื้อจัดจ้าง" and status="approve"')->order_by('id desc')->get(3);
		$this->load->view('inc_home_1',$data);
	}
	
	function inc_home_2(){
		$data['rs'] = new Info();
		$data['rs']->where('module = "ข่าวประกาศรับสมัครงาน" and status="approve"')->order_by('id desc')->get(4);
		$this->load->view('inc_home_2',$data);
	}
}
?>