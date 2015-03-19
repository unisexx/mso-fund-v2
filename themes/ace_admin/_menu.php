<div class="sidebar" id="sidebar">
	<!-- <div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-small btn-success">
				<i class="icon-signal"></i>
			</button>

			<button class="btn btn-small btn-info">
				<i class="icon-pencil"></i>
			</button>

			<button class="btn btn-small btn-warning">
				<i class="icon-group"></i>
			</button>

			<button class="btn btn-small btn-danger">
				<i class="icon-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div> -->
	<!--#sidebar-shortcuts-->

	<ul class="nav nav-list">
		<li <?=@$_GET['module'] == 'เกี่ยวกับ กบท.'?'class="active open"':'';?>>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-users"></i>
				<span class="menu-text"> เกี่ยวกับ กบท. </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li <?=@$_GET['module'] == 'เกี่ยวกับ กบท.' && @$_GET['category'] == 'เกี่ยวกับกองทุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=เกี่ยวกับ กบท.&category=เกี่ยวกับกองทุน">
						<i class="icon-double-angle-right"></i>
						เกี่ยวกับกองทุน
					</a>
				</li>

				<li <?=@$_GET['module'] == 'เกี่ยวกับ กบท.' && @$_GET['category'] == 'โครงสร้างหน่วยงาน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=เกี่ยวกับ กบท.&category=โครงสร้างหน่วยงาน">
						<i class="icon-double-angle-right"></i>
						โครงสร้างหน่วยงาน
					</a>
				</li>

				<li <?=@$_GET['module'] == 'เกี่ยวกับ กบท.' && @$_GET['category'] == 'การดำเนินงานตามนโยบาย'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=เกี่ยวกับ กบท.&category=การดำเนินงานตามนโยบาย">
						<i class="icon-double-angle-right"></i>
						การดำเนินงานตามนโยบาย
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'เกี่ยวกับ กบท.' && @$_GET['category'] == 'กฏหมาย/คำสั่งที่เกี่ยวข้อง'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=เกี่ยวกับ กบท.&category=กฏหมาย/คำสั่งที่เกี่ยวข้อง">
						<i class="icon-double-angle-right"></i>
						กฏหมาย/คำสั่งที่เกี่ยวข้อง
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'เกี่ยวกับ กบท.' && @$_GET['category'] == 'ติดต่อ กบท.'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=เกี่ยวกับ กบท.&category=ติดต่อ กบท.">
						<i class="icon-double-angle-right"></i>
						ติดต่อ กบท.
					</a>
				</li>
			</ul>
		</li>
		
		<li <?=@$_GET['module'] == 'ข่าวจัดซื้อจัดจ้าง' || @$_GET['module'] == 'ข่าวประกาศรับสมัครงาน' ?'class="active open"':'';?>>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-file-text-o"></i>
				<span class="menu-text"> ข้อมูลข่าวสาร </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li>
					<a href="form-elements.html">
						<i class="icon-double-angle-right"></i>
						ข่าวประชาสัมพันธ์<br>(Auto feed from Intranet)
					</a>
				</li>

				<li <?=@$_GET['module'] == 'ข่าวจัดซื้อจัดจ้าง'?'class="active open"':'';?>>
					<a href="infos/admin/infos?module=ข่าวจัดซื้อจัดจ้าง">
						<i class="icon-double-angle-right"></i>
						ข่าวจัดซื้อจัดจ้าง
					</a>
				</li>

				<li <?=@$_GET['module'] == 'ข่าวประกาศรับสมัครงาน'?'class="active open"':'';?>>
					<a href="infos/admin/infos?module=ข่าวประกาศรับสมัครงาน">
						<i class="icon-double-angle-right"></i>
						ข่าวประกาศรับสมัครงาน
					</a>
				</li>
			</ul>
		</li>
		
		<li <?=@$this->uri->segment(1) == 'downloads'?'class="active open"':'';?>>
			<a href="downloads/admin/downloads">
				<i class="fa fa-download"></i>
				<span class="menu-text"> ดาวน์โหลดแบบฟอร์ม </span>
			</a>
		</li>
		
		<li>
			<a href="index.html">
				<i class="fa fa-calendar"></i>
				<span class="menu-text"> ปฎิทินกิจกรรม (Auto feed from Intranet) </span>
			</a>
		</li>
		
		<li <?=(@$this->uri->segment(1) == 'galleries') || ($this->uri->segment(1) == 'vdos')?'class="active open"':'';?>>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-photo"></i>
				<span class="menu-text"> ภาพกิจกรรม/วิดีโอ </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li <?=@$this->uri->segment(1) == 'galleries'?'class="active"':'';?>>
					<a href="galleries/admin/categories">
						<i class="icon-double-angle-right"></i>
						ภาพกิจกรรม
					</a>
				</li>

				<li <?=@$this->uri->segment(1) == 'vdos'?'class="active"':'';?>>
					<a href="vdos/admin/vdos">
						<i class="icon-double-angle-right"></i>
						วิดีโอ
					</a>
				</li>
			</ul>
		</li>
		
		<li <?=@$this->uri->segment(1) == 'weblinks'?'class="active"':'';?>>
			<a href="weblinks/admin/weblinks">
				<i class="fa fa-globe"></i>
				<span class="menu-text"> เว็บไซต์แนะนำ </span>
			</a>
		</li>
		
		<li>
			<a href="index.html">
				<i class="fa fa-question"></i>
				<span class="menu-text"> สนทนา ถาม - ตอบ </span>
			</a>
		</li>
		
		<li <?=@$_GET['module'] == 'พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน'?'class="active open"':'';?>>
			<a href="#" class="dropdown-toggle">
				<i class="fa fa-file-pdf-o"></i>
				<span class="menu-text"> พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li <?=@$_GET['module'] == 'พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน' && @$_GET['category'] == 'การลา'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน&category=การลา">
						<i class="icon-double-angle-right"></i>
						การลา
					</a>
				</li>

				<li <?=@$_GET['module'] == 'พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน' && @$_GET['category'] == 'ค่าการศึกษาบุตร'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน&category=ค่าการศึกษาบุตร">
						<i class="icon-double-angle-right"></i>
						ค่าการศึกษาบุตร
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน' && @$_GET['category'] == 'ค่าเช่าบ้าน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน&category=ค่าเช่าบ้าน">
						<i class="icon-double-angle-right"></i>
						ค่าเช่าบ้าน
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน' && @$_GET['category'] == 'ค่ารักษาพยาบาล'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน&category=ค่ารักษาพยาบาล">
						<i class="icon-double-angle-right"></i>
						ค่ารักษาพยาบาล
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน' && @$_GET['category'] == 'ค่าล่วงเวลา'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน&category=ค่าล่วงเวลา">
						<i class="icon-double-angle-right"></i>
						ค่าล่วงเวลา
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน' && @$_GET['category'] == 'เดินทางไปราชการ'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน&category=เดินทางไปราชการ">
						<i class="icon-double-angle-right"></i>
						เดินทางไปราชการ
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน' && @$_GET['category'] == 'แนวปฏิบัติกระทรวงการคลัง'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน&category=แนวปฏิบัติกระทรวงการคลัง">
						<i class="icon-double-angle-right"></i>
						แนวปฏิบัติกระทรวงการคลัง
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน' && @$_GET['category'] == 'แนวปฏิบัติของสำนักนายกรัฐมนตรี'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=พรบ. กฏหมาย ระเบียบ ข้อบังคับ มติ ครม. และหนังสือเวียน&category=แนวปฏิบัติของสำนักนายกรัฐมนตรี">
						<i class="icon-double-angle-right"></i>
						แนวปฏิบัติของสำนักนายกรัฐมนตรี
					</a>
				</li>
			</ul>
		</li>
		
		<li <?=@$_GET['module'] == 'กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์'?'class="active open"':'';?>>
			<a href="#" class="dropdown-toggle">
				<i class="icon-star"></i>
				<span class="menu-text"> กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์ </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li <?=@$_GET['module'] == 'กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์' && @$_GET['category'] == 'เกี่ยวกับกองทุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์&category=เกี่ยวกับกองทุน">
						<i class="icon-double-angle-right"></i>
						เกี่ยวกับกองทุน
					</a>
				</li>

				<li <?=@$_GET['module'] == 'กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์' && @$_GET['category'] == 'การขอรับเงินสนับสนุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์&category=การขอรับเงินสนับสนุน">
						<i class="icon-double-angle-right"></i>
						การขอรับเงินสนับสนุน
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์' && @$_GET['category'] == 'เกณฑ์การพิจารณา'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์&category=เกณฑ์การพิจารณา">
						<i class="icon-double-angle-right"></i>
						เกณฑ์การพิจารณา
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์' && @$_GET['category'] == 'แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์&category=แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)">
						<i class="icon-double-angle-right"></i>
						แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์' && @$_GET['category'] == 'ระเบียบและประกาศที่เกี่ยวข้อง'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์&category=ระเบียบและประกาศที่เกี่ยวข้อง">
						<i class="icon-double-angle-right"></i>
						ระเบียบและประกาศที่เกี่ยวข้อง
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์' && @$_GET['category'] == 'การเงินและการบริหารงบประมาณ'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์&category=การเงินและการบริหารงบประมาณ">
						<i class="icon-double-angle-right"></i>
						การเงินและการบริหารงบประมาณ
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์' && @$_GET['category'] == 'ผลการดำเนินงานกองทุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์&category=ผลการดำเนินงานกองทุน">
						<i class="icon-double-angle-right"></i>
						ผลการดำเนินงานกองทุน
					</a>
				</li>
			</ul>
		</li>
		
		<li <?=@$_GET['module'] == 'กองทุนส่งเสริมการจัดการสวัสดิการ'?'class="active open"':'';?>>
			<a href="#" class="dropdown-toggle">
				<i class="icon-star"></i>
				<span class="menu-text"> กองทุนส่งเสริมการจัดการสวัสดิการ </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li <?=@$_GET['module'] == 'กองทุนส่งเสริมการจัดการสวัสดิการ' && @$_GET['category'] == 'เกี่ยวกับกองทุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนส่งเสริมการจัดการสวัสดิการ&category=เกี่ยวกับกองทุน">
						<i class="icon-double-angle-right"></i>
						เกี่ยวกับกองทุน
					</a>
				</li>

				<li <?=@$_GET['module'] == 'กองทุนส่งเสริมการจัดการสวัสดิการ' && @$_GET['category'] == 'การขอรับเงินสนับสนุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนส่งเสริมการจัดการสวัสดิการ&category=การขอรับเงินสนับสนุน">
						<i class="icon-double-angle-right"></i>
						การขอรับเงินสนับสนุน
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนส่งเสริมการจัดการสวัสดิการ' && @$_GET['category'] == 'เกณฑ์การพิจารณา'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนส่งเสริมการจัดการสวัสดิการ&category=เกณฑ์การพิจารณา">
						<i class="icon-double-angle-right"></i>
						เกณฑ์การพิจารณา
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนส่งเสริมการจัดการสวัสดิการ' && @$_GET['category'] == 'แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนส่งเสริมการจัดการสวัสดิการ&category=แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)">
						<i class="icon-double-angle-right"></i>
						แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนส่งเสริมการจัดการสวัสดิการ' && @$_GET['category'] == 'ระเบียบและประกาศที่เกี่ยวข้อง'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนส่งเสริมการจัดการสวัสดิการ&category=ระเบียบและประกาศที่เกี่ยวข้อง">
						<i class="icon-double-angle-right"></i>
						ระเบียบและประกาศที่เกี่ยวข้อง
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนส่งเสริมการจัดการสวัสดิการ' && @$_GET['category'] == 'การเงินและการบริหารงบประมาณ'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนส่งเสริมการจัดการสวัสดิการ&category=การเงินและการบริหารงบประมาณ">
						<i class="icon-double-angle-right"></i>
						การเงินและการบริหารงบประมาณ
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนส่งเสริมการจัดการสวัสดิการ' && @$_GET['category'] == 'ผลการดำเนินงานกองทุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนส่งเสริมการจัดการสวัสดิการ&category=ผลการดำเนินงานกองทุน">
						<i class="icon-double-angle-right"></i>
						ผลการดำเนินงานกองทุน
					</a>
				</li>
			</ul>
		</li>
		
		<li <?=@$_GET['module'] == 'กองทุนคุ้มครองเด็ก'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=กองทุนส่งเสริมการจัดการสวัสดิการ&category=กองทุนคุ้มครองเด็ก" class="dropdown-toggle">
				<i class="icon-star"></i>
				<span class="menu-text"> กองทุนคุ้มครองเด็ก </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li <?=@$_GET['module'] == 'กองทุนคุ้มครองเด็ก' && @$_GET['category'] == 'เกี่ยวกับกองทุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนคุ้มครองเด็ก&category=เกี่ยวกับกองทุน">
						<i class="icon-double-angle-right"></i>
						เกี่ยวกับกองทุน
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนคุ้มครองเด็ก' && @$_GET['category'] == 'การขอรับเงินสนับสนุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนคุ้มครองเด็ก&category=การขอรับเงินสนับสนุน">
						<i class="icon-double-angle-right"></i>
						การขอรับเงินสนับสนุน
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนคุ้มครองเด็ก' && @$_GET['category'] == 'เกณฑ์การพิจารณา'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนคุ้มครองเด็ก&category=เกณฑ์การพิจารณา">
						<i class="icon-double-angle-right"></i>
						เกณฑ์การพิจารณา
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนคุ้มครองเด็ก' && @$_GET['category'] == 'แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนคุ้มครองเด็ก&category=แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)">
						<i class="icon-double-angle-right"></i>
						แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนคุ้มครองเด็ก' && @$_GET['category'] == 'ระเบียบและประกาศที่เกี่ยวข้อง'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนคุ้มครองเด็ก&category=ระเบียบและประกาศที่เกี่ยวข้อง">
						<i class="icon-double-angle-right"></i>
						ระเบียบและประกาศที่เกี่ยวข้อง
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนคุ้มครองเด็ก' && @$_GET['category'] == 'การเงินและการบริหารงบประมาณ'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนคุ้มครองเด็ก&category=การเงินและการบริหารงบประมาณ">
						<i class="icon-double-angle-right"></i>
						การเงินและการบริหารงบประมาณ
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'กองทุนคุ้มครองเด็ก' && @$_GET['category'] == 'ผลการดำเนินงานกองทุน'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=กองทุนคุ้มครองเด็ก&category=ผลการดำเนินงานกองทุน">
						<i class="icon-double-angle-right"></i>
						ผลการดำเนินงานกองทุน
					</a>
				</li>
			</ul>
		</li>
		
		<li <?=@$_GET['module'] == 'เงินอุดหนุนองค์กรสวัสดิการสังคม'?'class="active open"':'';?>>
			<a href="#" class="dropdown-toggle">
				<i class="icon-star"></i>
				<span class="menu-text"> เงินอุดหนุนองค์กรสวัสดิการสังคม </span>

				<b class="arrow icon-angle-down"></b>
			</a>

			<ul class="submenu">
				<li <?=@$_GET['module'] == 'เงินอุดหนุนองค์กรสวัสดิการสังคม' && @$_GET['category'] == 'เงินอุดหนุนองค์การสวัสดิการสังคม'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=เงินอุดหนุนองค์กรสวัสดิการสังคม&category=เงินอุดหนุนองค์การสวัสดิการสังคม">
						<i class="icon-double-angle-right"></i>
						เงินอุดหนุนองค์การสวัสดิการสังคม
					</a>
				</li>

				<li <?=@$_GET['module'] == 'เงินอุดหนุนองค์กรสวัสดิการสังคม' && @$_GET['category'] == 'แบบฟอร์ม'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=เงินอุดหนุนองค์กรสวัสดิการสังคม&category=แบบฟอร์ม">
						<i class="icon-double-angle-right"></i>
						แบบฟอร์ม
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'เงินอุดหนุนองค์กรสวัสดิการสังคม' && @$_GET['category'] == 'หลักเกณฑ์และแนวทาง'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=เงินอุดหนุนองค์กรสวัสดิการสังคม&category=หลักเกณฑ์และแนวทาง">
						<i class="icon-double-angle-right"></i>
						หลักเกณฑ์และแนวทาง
					</a>
				</li>
				
				<li <?=@$_GET['module'] == 'เงินอุดหนุนองค์กรสวัสดิการสังคม' && @$_GET['category'] == 'ระเบียบประกาศ'?'class="active open"':'';?>>
					<a href="contents/admin/contents/form?module=เงินอุดหนุนองค์กรสวัสดิการสังคม&category=ระเบียบประกาศ">
						<i class="icon-double-angle-right"></i>
						ระเบียบประกาศ
					</a>
				</li>
			</ul>
		</li>
		
	</ul><!--/.nav-list-->

	<div class="sidebar-collapse" id="sidebar-collapse">
		<i class="icon-double-angle-left"></i>
	</div>
</div>