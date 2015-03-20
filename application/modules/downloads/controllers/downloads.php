<?php
class Downloads extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function inc_home()
	{
		$download = new Download();
		$this->load->view('inc_home',$data);
	}
}

?>