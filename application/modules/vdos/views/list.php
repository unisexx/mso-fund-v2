<div id="title-blank">ข่าวกิจกรรม / วีดีโอ</div>
<div id="breadcrumb"><a href="">หน้าแรก</a> > <span class="b1">ข่าวกิจกรรม / วีดีโอ</span></div>
<div id="page">
	<?foreach($rs as $row):?>
		<div class="media col-lg-6" style="position: relative;">
		<div class="vdoplay" style="top:76px;"><a href="vdos/view/<?=$rs->id?>">&nbsp;</a></div>
		  <div class="media-left media-middle">
		    <a href="vdos/view/<?=$row->id?>">
		      <img class="media-object imgvdo" src="uploads/vdo/<?=$row->image?>" width="139" height="96">
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><?=$row->title?></h4>
		  </div>
		</div>
	<?endforeach;?>
<br clear="all">
</div>