<?php
class Contents extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function view(){
		$data['rs'] = new Content();
		$data['rs']->where('module = "'.$_GET['module'].'" and category = "'.$_GET['category'].'"')->get(1);
		$this->template->build('view',$data);
	}
	
	function fund(){
		$this->template->build('fund');
	}
	
	function act(){
		$this->template->build('act');
	}
}
?>