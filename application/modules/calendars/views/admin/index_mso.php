<div class="breadcrumbs" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home home-icon"></i>
			<a href="#">หน้าแรก</a>

			<span class="divider">
				<i class="icon-angle-right arrow-icon"></i>
			</span>
		</li>
		<li class="active">ปฎิทินกิจกรรม (Auto feed from Intranet)</li>
	</ul><!--.breadcrumb-->

	<div class="nav-search" id="nav-search">
		<form class="form-search" />
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="icon-search nav-search-icon"></i>
			</span>
		</form>
	</div><!--#nav-search-->
</div>

<div class="page-content">

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			
			<div class="row-fluid">
				<!-- <h3 class="header smaller lighter blue">jQuery dataTables</h3> -->
				<div class="table-header">
					
					ปฎิทินกิจกรรม (Auto feed from Intranet)
                    
				</div>

				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							
							<th>หัวข้อ</th>
							<!-- <th><a class="btn btn-mini iframe" href="categories/admin/categories/downloads?iframe=true&width=90%&height=90%">หมวดหมู่</a></th> -->
							<th>วัน เวลา </th>
							<th>ผู้สร้างรายการ</th>
							<th width="90">
							
							</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						
						$this->load->helper('html'); 
						
						foreach($rs as $row): 
							
						dbConvert($row);
						
						 ?>
						<tr>
						
							<td><?=$row['title']?></td>
							<!-- <td><?=$row->category->name?></td> -->
						
							<td><?=mysql_to_th($row['startdate'])?> ถึง  <?=mysql_to_th($row['enddate'])?></td>
							<td><?=$row['createby']?></td>
							<td class="td-actions">
								<div class="hidden-phone visible-desktop action-buttons">
									
									<a class="green" href="calendars/admin/calendars/form/<?php echo $row['id']; ?>">
										<i class="icon-pencil bigger-130"></i>
									</a>

					
								</div>


							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>

		
				
			<!--PAGE CONTENT ENDS-->
		</div>
	</div>
</div>


<!--page specific plugin scripts-->
<script src="themes/ace_admin/assets/js/jquery.colorbox-min.js"></script>
<script src="themes/ace_admin/assets/js/jquery.dataTables.min.js"></script>
<script src="themes/ace_admin/assets/js/jquery.dataTables.bootstrap.js"></script>

<script type="text/javascript">
$(function() {
	$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	
	var oTable1 = $('#sample-table-2').dataTable( {
	"aoColumns": [
      { "bSortable": false },
      null,
	  // null,
	  { "bSortable": false }
	] } );
	
	
	$('table th input:checkbox').on('click' , function(){
		var that = this;
		$(this).closest('table').find('tr > td:first-child input:checkbox')
		.each(function(){
			this.checked = that.checked;
			$(this).closest('tr').toggleClass('selected');
		});
			
	});


	$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
	function tooltip_placement(context, source) {
		var $source = $(source);
		var $parent = $source.closest('table')
		var off1 = $parent.offset();
		var w1 = $parent.width();

		var off2 = $source.offset();
		var w2 = $source.width();

		if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
		return 'left';
	}
	
			 $("#frmImportXMl").bind("submit", function () {
					  
			 if ($("#file_xml").val().length < 1) {
		
				alert("กรุณาเลือกไฟล์นำเข้า!!");
		
				return false;
			}
		
			
		});
	
})
</script>