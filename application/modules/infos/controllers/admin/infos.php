<?php
class Infos extends Admin_mso_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		
		if($_GET['module']!='mso'){
				
			$data['rs'] = new Info();
			$data['rs']->where('module = "'.$_GET['module'].'"')->order_by('id','desc')->get();
			$this->template->append_metadata(js_checkbox('approve'));
			$this->template->build('admin/index',$data);
			
		}else{
				
			include('themes/fundv2/odbc_connect.php');
			
			$this->load->helper('html');
			
			$data['rs'] = $db->Execute("select * from WEB_NEWS ORDER BY ID DESC");
			
			$this->template->append_metadata(js_checkbox('approve'));
			$this->template->build('admin/index_mso',$data);
			
		}
		

	}
	
	function form($id=FALSE)
	{
		if($_GET['module']!='mso'){
			
			$data['rs'] = new Info($id);
			$this->template->build('admin/form',$data);
		
		}else{
			
			include('themes/fundv2/odbc_connect.php');
			
			$this->load->helper('html');
			
			$data['rs'] = $db->Execute("select * from WEB_NEWS WHERE ID=".$id);
			
			$this->template->build('admin/form_mso',$data);
			
		}
	}
	
	function save($id=false){
        if($_POST)
        {
            $rs = new Info($id);
            if($_FILES['image']['name'])
            {
                if($rs->id){
                    $rs->delete_file($rs->id,'uploads/info','image');
                }
                $_POST['image'] = $rs->upload($_FILES['image'],'uploads/info/',139,96);
            }
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			if(!$id)$_POST['status'] = "approve";
			$_POST['slug'] = clean_url($_POST['title']);
			// $_POST['start_date'] = Date2DB($_POST['start_date']);
            // $_POST['end_date'] = Date2DB($_POST['end_date']);
            $rs->from_array($_POST);
            $rs->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
    }
	
	function delete($id=false)
	{
		if($id)
		{
			$rs = new Info($id);
			$rs->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id){
        if($_POST)
        {
            $rs = new Info($id);
            $rs->from_array($_POST);
            $rs->save();
        }

    }
}
?>