<?php
class Downloads extends Public_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function inc_home()
	{
		$data['rs'] = new Category();
		$this->load->view('inc_home');
	}
}
?>