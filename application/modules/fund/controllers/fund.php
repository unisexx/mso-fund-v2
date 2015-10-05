<?php
class Fund extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function report_contact(){
		$CI =& get_instance();
		putenv("NLS_LANG=AMERICAN_AMERICA.TH8TISASCII");
		array_walk($_POST,'dbConvert','TIS-620');
		$this->load->library('adodb');
		// $this->ado->debug = true;
		
		if($_GET['contact_type'] == 1){
			// กองทุนคุ้มครองเด็ก รายโครงการ
			$sql = "select 
				fund_projectsupport.* 
				,CASE WHEN fund_projectsupport.welfare_type = 1 THEN AWB.organ_name
					WHEN fund_projectsupport.welfare_type = 2 THEN awc.organ_name
					END organization
				,FUND_PROJECT_SUPPORT_RESULT.appoved_id
				,fund_project_support_result.date_appoved
				,fund_project_contract.status contract_status
			from (
						select 
							FUND_PROJECTSUPPORT.*,
							(
								select ap_id from (
									select 
										FUND_PROJECT_SUPPORT_RESULT.fund_project_support_id id
										, FUND_PROJECT_SUPPORT_RESULT.id ap_id 	
									from FUND_PROJECT_SUPPORT_RESULT
										left join fund_projectsupport on fund_project_support_result.fund_project_support_id = fund_projectsupport.id
									where 
										(
											fund_projectsupport.central_check = 1 
											and FUND_PROJECT_SUPPORT_RESULT.result_type = 2 
										) or (
											fund_projectsupport.central_check != 1 
											and FUND_PROJECT_SUPPORT_RESULT.result_type = 3
										)
										
									order by DATE_APPOVED desc, time DESC
								)
								where rownum = 1
									and id = FUND_PROJECTSUPPORT.id
							) fpsr_id
						from FUND_PROJECTSUPPORT
					) fund_projectsupport
						left join act_welfare_benefit awb on fund_projectsupport.welfare_id = awb.id
						left join ACT_WELFARE_COMM awc on fund_projectsupport.welfare_id = awc.id
						left join FUND_PROJECT_SUPPORT_RESULT on FUND_PROJECT_SUPPORT_RESULT.id = fund_projectsupport.fpsr_id
						left join fund_project_contract on fund_projectsupport.id = fund_project_contract.fund_projectsupport_id
			where 
				(FUND_PROJECT_SUPPORT_RESULT.appoved_id = 2
				or FUND_PROJECT_SUPPORT_RESULT.appoved_id = 3) ";
	
			// if($data['is_central'] == 0) {
				// $province = $this->province->get_row("wprovince_id", login_data('workgroup_provinceid'));
				// $sql .= " and fund_projectsupport.province_id = '".$province['id']."' and (fund_projectsupport.central_check = 0 or fund_projectsupport.central_check is null)";
			// }
		
		}elseif($_GET['contact_type'] == 2){
			// กองทุนส่งเสริมการจัดสวัสดิการสังคม
			$sql = "select 
						wc.*, 
						w.id as w_id,
						w.agency_name as w_agency_name,
						w.project_name as w_project_name,
						w.project_system_name,
						w.approve_amount as w_approve_amount
					from FUND_WELFARE w
					left join fund_welfare_contract wc on wc.welfare_id = w.id ";
	
			$sql .= ' LEFT JOIN FUND_PROVINCE ON FUND_PROVINCE.ID = w.PROVINCE_ID';
	
			$sql .= " where w.PRE_STATUS = '3' and ( w.COMMIT_STATUS = '1' or w.COMMIT_STATUS = '2') ";
	
			// if(permission('fund/welfare/getlist', 'action_extra1')) {
				$sql .= " AND w.WEB_FORM = 0 ";
			// } else {
				// $sql .= " AND FUND_PROVINCE.WPROVINCE_ID = '".login_data("WORKGROUP_PROVINCEID")."'";
			// }
			
			if (!empty($_GET['src_text'])) {
				$sql .= " AND w.PROJECT_NAME LIKE '%".$_GET["src_text"]."%' ";
				$sql .= " AND wc.contract_no LIKE '%".$_GET["src_text"]."%' ";
				$sql .= " AND w.BUDGET LIKE '%".$_GET["src_text"]."%' ";
			}
	
			if (!empty($_GET['src_project_system'])) {
				$sql .= " AND w.project_system = '".$_GET["src_project_system"]."' ";
			}
	
			if (!empty($_GET['src_dept'])) {
				$sql .= " AND wc.DEPT_ID = '".$_GET["src_dept"]."' ";
			}
	
			if (!empty($_GET['src_date'])) {
				$sql .= " AND wc.contract_date = '".$_GET["src_date"]."' ";
			}
			
			$sql .= " order by w.id desc ";
	
			// นับจำนวนแต่ละสถานนะ //
			$sql_count = "SELECT 
								count(CASE WHEN id is not null  THEN 1 ELSE null END) as count_normal,
								count(CASE WHEN id is null THEN 1 ELSE null END) as count_wait
							FROM
							(".$sql.")";
		}else{
			
			
		}
		
		
		
		$data['variable'] = $this->ado->GetArray($sql);
		dbConvert($data['variable']);
			
		$this->template->build('report_contact',$data);
	}
}
?>