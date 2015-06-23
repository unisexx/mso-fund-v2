<div id="title-blank"><?=$rs->module?></div>
<div id="breadcrumb"><a href="#">หน้าแรก</a> > <span class="b1"><a href="infos/lists?module=<?=$rs->module?>"><?=$rs->module?></a></span></div>
<div id="page">
	<h1><?=$rs->title?></h1>
	
	
		<br>
		
		<img src="uploads/info/<?php echo $rs->image; ?>" width="158" height="110" class="img-pr-news">
		
		<br>
	
	<?=$rs->detail?>
	
	วันที่ : <?php echo mysql_to_th($rs->created); ?>
</div>