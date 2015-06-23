<div id="news">
	<div class="newstitle">ข่าวประชาสัมพันธ์ <span><a href="infos/lists?module=ข่าวประชาสัมพันธ์" class="viewall">ดูทั้งหมด</a></span></div>
       <?foreach($rs as $key=>$row):?>
		   <p class="<?=($key==2 || $key==5)?'p-news2':'p-news';?>">
		   	<?if($row->url == ""):?>
		   		<img src="uploads/info/<?=$row->image?>" width="158" height="110" class="img-pr-news">
		   	<?else:?>
		   		<img src="<?=$row->image?>" width="158" height="110" class="img-pr-news">
		   	<?endif;?>
		   <br>
	       <a href="infos/view_mso/<?=$row->id?>"><?=$row->title?></a></p>
       <?endforeach;?>
</div>