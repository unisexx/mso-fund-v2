	<?php 
	
		$this->load->helper('html'); 
		
		foreach($rs as $row)
		{
			
			dbConvert($row);
	?>
 <style>
 	
 	.txt_title{
 		font-weight: bold; 
 		color: #C36000;
 	}
 	
 </style>
    	
    	<div style="clear::both; margin-top:55px;"></div>
    	
        <div id="breadcrumb">
		
		<a href="home/index">หน้าแรก</a> 
		> 
		<span class="b1"><a href="calendars/calendar_mso">ปฏิทินกิจกรรม</a></span> 
		> 
		<span class="b1"><a href="calendars/calendar_mso?actcalendar_type_id=<?=$row['actcalendar_type_id']?>"><?=$row['title']?></a></span>
		
		</div>
		
		<div style="clear::both; margin-bottom:10px;"></div>
		
		<div id="title-blank"><?=$row['title']?></div>
		
	    <div id="page">
	
        	<p>
			
				<h3 class="txt_title">ชื่องาน :<?=$row['title']?></h3><br />
                <p><span class="txt_title">สถานที่ :</span><?=$row['location']?></p><br /> 
				<p><span class="txt_title">วัน เวลา :</span><?=mysql_to_th($row['startdate'])?> ถึง  <?=mysql_to_th($row['enddate'])?></p><br /> 
				<p><span class="txt_title">รายละเอียด :</span><?=$row['detail']?></p><br /> 
				<p><span class="txt_title">เจ้าของงาน(ชื่อหน่วยงาน) :</span><?=$row['department_id']?></p><br /> 
				<p><span class="txt_title">ผู้สร้างรายการ :</span><?=$row['createby']?></p><br />  

				<br />
				<br />
				
<!-- 
	
	//show details etc
	
	
-->
	
	         <div id="download">
         	
       
        	
            <div id="tab">
            	
                <div id="tabkm1">
                	
                    <ul id="navtab">
                    	
                        <li><a href="#tab1" class="active">ภาพกิจกรรม</a></li>
                        <li><a href="#tab2">ไฟล์แนบ</a></li>
                        
                    </ul>
                    
                    <div class="clearfix" style="line-height:0;">&nbsp;</div>
                    
                <div id="konten">
                	
                        <div style="display: none;" id="tab1" class="tab_konten">
                        	
                  		<table width="100%" class="tb1">
                  			
                              <tr>
                                <td width="100%" style="padding-left:6px;">
                                	<p>ไม่มีภาพกิจกรรม</p>
                                </td>
	      					  </tr>


						</table>
						<!--
                    	<div class="viewall-tb1"><a href="#">ดูทั้งหมด</a></div>
                        -->    
               			</div>
                        
                        <div style="display: none;" id="tab2" class="tab_konten">
                        	
                           <table width="100%" class="tb1">
                           	
                              <tr>
                                <td width="100%" style="padding-left:6px;">
                                	<p>ไม่มีไฟล์แนบ</p>
                                </td>
	      					  </tr>


						</table>
        				<!--
                        	<div class="viewall-tb1"><a href="#">ดูทั้งหมด</a></div>
                       		--> 	
                        </div>
                        

                    </div>
                </div>
            </div>
         </div>

	
<!-- end detail -->				
				
			</p>
			
        </div>
        
<?php } ?>