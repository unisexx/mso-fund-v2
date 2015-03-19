<?php
class Contents extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index(){
		$book = new Content();
		if(@$_GET['category']){ $book->where('category_id = '.$_GET['category']); }
		$data['books'] = $book->where('status = "approve"')->order_by('id','desc')->get();
	}
}
?>