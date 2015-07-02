<div id="title-blank"><?=$_GET['module']?></div>
<div id="breadcrumb"><a href="home/index">หน้าแรก</a> > <span class="b1"><?=$_GET['module']?></span></div>
<div id="page">
	<?foreach($rs as $row):?>
		<div class="media col-lg-6">
		  <div class="media-left media-middle">
		    <a href="infos/view/<?=$row->id?>">
		      <?if($row->url == ""):?>
		      	<img class="media-object" src="uploads/info/<?=$row->image?>" width="139" height="96">
		      <?else:?>
		      	<img class="media-object" src="<?=$row->image?>" width="139" height="96">
		      <?endif;?>
		    </a>
		  </div>
		  <div class="media-body">
		    <h3 style="font-size: 14px; margin-top: 0px; line-height: 1.5;"><?=$row->title?></h3>
		  </div>
		</div>
	<?endforeach;?>
<br clear="all">
<?=$rs->pagination();?>
</div>