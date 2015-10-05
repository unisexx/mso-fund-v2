<div id="title-blank">รายงานการเซ็นสัญญา</div>
<div id="breadcrumb"><a href="#">หน้าแรก</a> > <span class="b1"><a href="fund/report_contact">รายงานการเซ็นสัญญา</a></span></div>
<div id="page">
	<h1>รายงานการเซ็นสัญญา</h1>
	
	<div class="row col-md-4" style="margin-bottom: 10px;">
	<select class="form-control" name="contact_type">
		<option value="1">กองทุนคุ้มครองเด็กรายโครงการ</option>
		<option value="2">กองทุนส่งเสริมการจัดสวัสดิการสังคม</option>
		<option value="3">กองทุนป้องกันค้ามนุษย์รายโครงการ</option>
	</select>
	</div>
	
	<?if($_GET['contact_type'] == 1):?>
	<table class="table table-bordered">
		<tr>
	  		<th style="width: 15px;" >ลำดับ</th>
	  		<th>สัญญาเลขที่</th>
	  		<th>ชื่อองค์กร</th>
	  		<th>ชื่อโครงการ</th>
	  		<th>เมื่อวันที่</th>
	  		<th>จำนวนเงิน</th>
	  		<!-- <th>สถานะ</th> -->
	  		<!-- <th>พิมพ์</th> -->
	  	</tr>
		<?php 
			//--Empty data.
			echo (empty($variable))?'<tr> <td colspan="8" class="text-center" >- ไม่มีข้อมูล -</td> </tr>':null;

			foreach ($variable as $key => $value): 
				$value['contract_status'] = (empty($value['contract_status']))?1:$value['contract_status'];
		?>
			<tr>
				<td><?=$key+1?></td>
				<td><?=$value['project_code']?></td>
				<td><?=$value['organization']?></td>
				<!-- <td><?=anchor('fund/project/contract/form/'.$value['id'], $value['project_name'])?></td> -->
				<td><?=$value['project_name']?></td>
				<td><?=db_to_th($value['date_appoved'], false)?></td>
				<td><?=number_format((empty($value['budget_project']))?0:$value['budget_project'], 2)?></td>
				<!-- <td><?=$value['contract_status']?></td>';
				<td><?echo ($value['contract_status'] == 4)?anchor('fund/project/contract/report_print/'.$value['id'], '<img src="http://boffice.m-society.go.th/bo_ppt/fund/images/ico_print.png">'):null;?></td> -->
			</tr>
		<?endforeach;?>
	</table>
	<?elseif($_GET['contact_type'] == 2):?>
	<table class="table table-bordered">
	  <tr>
	    <th align="left">ลำดับ</th>
	    <th align="left">สัญญาเลขที่</th>
	    <th align="left">ชื่อองค์กร</th>
	    <th align="left">ชื่อโครงการ</th>
	    <th align="left">ระบบการจัดสรร</th>
	    <th align="left">เมื่อวันที่</th>
	    <th align="left">จำนวนเงิน</th>
	    <!-- <th align="left">สถานะ</th>
	    <th align="left">พิมพ์</th> -->
	  </tr>
	  <?php foreach ($variable as $key => $value):?>
	    <tr>
	      <td><?php echo $key+1; ?></td>
	      <td nowrap="nowrap"><?php echo @$value['contract_no']; ?></td>
	      <td><?php echo (empty($value['agency_name']))?$value['w_agency_name']:$value['agency_name']; ?></td>
	      <td><?php echo (empty($value['project_name']))?$value['w_project_name']:$value['project_name']; ?></td>
	      <td><?php echo @$value["project_system_name"]?></td>
	      <td><?php echo db_to_th(@$value["contract_date"], false); ?></td>
	      <td><?php echo @number_format((empty($value["approve_amount"]))?$value['approve_amount']:$value['w_approve_amount'], 2); ?></td>
	      <!-- <td>
	          <?php 
	              $img1 = '<img src="images/fund/icon/ico_wait.png" alt="" width="32" height="32" class="vtip" title="รอทำสัญญา" />';
	              $img2 = '<img src="images/fund/icon/document.png" width="32" height="32"/>';
	              echo (empty($value['id']))?$img1:$img2;
	          ?>
	          
	      </td>
	      <td>
	        <?php if (!empty($value['id'])) { ?>
	                <a href="fund/welfare/contract/prints/<?php echo $value['id']; ?>" class="vtip" title="พิมพ์สัญญา"><img src="images/fund/ico_print.png" width="24" height="24" /></a>
	        <?php } ?>
	      </td> -->
	    </tr>
	  <?php endforeach; ?>
	</table>
	<?else:?>
	<?endif;?>


</div>