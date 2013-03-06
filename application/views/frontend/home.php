<script type="text/javascript">
$(document).ready(function() {
	$('#mobileButton').click(function(){
		$('div.mobileImages').show();
		$('div.webImages').hide();
		$('div.logoImages').hide();
		$('div.allImages').hide();
		$('div.dataImages').hide()
	});
	$('#webButton').click(function(){
		$('div.mobileImages').hide();
		$('div.webImages').show();
		$('div.logoImages').hide();
		$('div.allImages').hide();
		$('div.dataImages').hide()
	});
	$('#logoButton').click(function(){
		$('div.mobileImages').hide();
		$('div.webImages').hide();
		$('div.logoImages').show();
		$('div.allImages').hide();
		$('div.dataImages').hide();
	});
	$('#dataButton').click(function(){
		$('div.mobileImages').hide();
		$('div.webImages').hide();
		$('div.logoImages').hide();
		$('div.allImages').hide();
		$('div.dataImages').show();
	});
});
</script>



<p class="siteHeader"> <?=$content['main']['siteName'];?></p>

<div class="menu">
<a href="#" id="webButton">web</a><br/>
<a href="#" id="mobileButton">mobile</a><br/>
<a href="#" id="logoButton">identity</a><br/>
<a href="#" id="dataButton">visualizations</a></br>
<a href="mailto:email@email.net">contact</a><br/>
</div>


<?
$allImages = array_merge($content['mobileImages'], $content['webImages'], $content['logoImages'], $content['dataImages']);
shuffle($allImages);

?>



<div class="mainContent">


<div class="allImages">

<div id="allImagesList" >
<?foreach($allImages as $allImagesItem):?>

	<div class="imagesItem">

	 <?if(is_object($allImagesItem['thumbnail'])):?>
		<img class="thumbnail <?=latticeutil::modulo('mobileList', array('alpha', '', 'omega'));?>" src="<?=latticeurl::site($allImagesItem['thumbnail']->original->fullpath);?>" width="<?=$allImagesItem['thumbnail']->original->width;?>" height="<?=$allImagesItem['thumbnail']->original->height;?>" alt="<?=$allImagesItem['thumbnail']->original->filename;?>" />
	 <?endif;?>
<!--
	 <?if(is_object($allImagesItem['img'])):?>
		<img id="img" src="<?=latticeurl::site($allImagesItem['img']->original->fullpath);?>" width="<?=$allImagesItem['img']->original->width;?>" height="<?=$allImagesItem['img']->original->height;?>" alt="<?=$allImagesItem['img']->original->filename;?>" />
	 <?endif;?>
<h2><?=$allImagesItem['title'];?></h2>
	 <p class="caption"> <?=$allImagesItem['caption'];?></p>
-->
	</div>
<?endforeach;?>
</div>
</div>


<div class="mobileImages">

<div id="mobileImagesList" >
<?foreach($content['mobileImages'] as $mobileImagesItem):?>

	<div class="imagesItem">

	 <?if(is_object($mobileImagesItem['thumbnail'])):?>
		<img class="thumbnail <?=latticeutil::modulo('mobileList', array('alpha', '', 'omega'));?>" src="<?=latticeurl::site($mobileImagesItem['thumbnail']->original->fullpath);?>" width="<?=$mobileImagesItem['thumbnail']->original->width;?>" height="<?=$mobileImagesItem['thumbnail']->original->height;?>" alt="<?=$mobileImagesItem['thumbnail']->original->filename;?>" />
	 <?endif;?>
<!--
	 <?if(is_object($mobileImagesItem['img'])):?>
		<img id="img" src="<?=latticeurl::site($mobileImagesItem['img']->original->fullpath);?>" width="<?=$mobileImagesItem['img']->original->width;?>" height="<?=$mobileImagesItem['img']->original->height;?>" alt="<?=$mobileImagesItem['img']->original->filename;?>" />
	 <?endif;?>
<h2><?=$mobileImagesItem['title'];?></h2>
	 <p class="caption"> <?=$mobileImagesItem['caption'];?></p>
-->
	</div>
<?endforeach;?>
</div>
</div>



<div class="webImages">

<div id="webImagesList" >
<?foreach($content['webImages'] as $webImagesItem):?>
	<div class="imagesItem">

	 <?if(is_object($webImagesItem['thumbnail'])):?>
		<img id="thumbnail" src="<?=latticeurl::site($webImagesItem['thumbnail']->original->fullpath);?>" width="<?=$webImagesItem['thumbnail']->original->width;?>" height="<?=$webImagesItem['thumbnail']->original->height;?>" alt="<?=$webImagesItem['thumbnail']->original->filename;?>" />
	 <?endif;?>

<!--
	 <?if(is_object($webImagesItem['img'])):?>
		<img id="img" src="<?=latticeurl::site($webImagesItem['img']->original->fullpath);?>" width="<?=$webImagesItem['img']->original->width;?>" height="<?=$webImagesItem['img']->original->height;?>" alt="<?=$webImagesItem['img']->original->filename;?>" />
	 <?endif;?>

<h2><?=$webImagesItem['title'];?></h2>
	 <p class="caption"> <?=$webImagesItem['caption'];?></p>
-->
	</div>
<?endforeach;?>
</div>
</div>






<div class="logoImages">

<div id="logoImagesList" >
<?foreach($content['logoImages'] as $logoImagesItem):?>
	<div class="imagesItem">


	 <?if(is_object($logoImagesItem['thumbnail'])):?>
		<img id="thumbnail" src="<?=latticeurl::site($logoImagesItem['thumbnail']->original->fullpath);?>" width="<?=$logoImagesItem['thumbnail']->original->width;?>" height="<?=$logoImagesItem['thumbnail']->original->height;?>" alt="<?=$logoImagesItem['thumbnail']->original->filename;?>" />
	 <?endif;?>

<!--

	 <?if(is_object($logoImagesItem['img'])):?>
		<img id="img" src="<?=latticeurl::site($logoImagesItem['img']->original->fullpath);?>" width="<?=$logoImagesItem['img']->original->width;?>" height="<?=$logoImagesItem['img']->original->height;?>" alt="<?=$logoImagesItem['img']->original->filename;?>" />
	 <?endif;?>

<h2><?=$logoImagesItem['title'];?></h2>
	 <p class="caption"> <?=$logoImagesItem['caption'];?></p>
-->
	</div>
<?endforeach;?>
</div>
</div>

<div class="dataImages">

<div id="dataImagesList" >
<?foreach($content['dataImages'] as $dataImagesItem):?>
  <div class="imagesItem">

   <?if(is_object($dataImagesItem['thumbnail'])):?>
    <img id="thumbnail" src="<?=latticeurl::site($dataImagesItem['thumbnail']->original->fullpath);?>" width="<?=$dataImagesItem['thumbnail']->original->width;?>" height="<?=$dataImagesItem['thumbnail']->original->height;?>" alt="<?=$dataImagesItem['thumbnail']->original->filename;?>" />
   <?endif;?>
<!--
   <?if(is_object($dataImagesItem['img'])):?>
		     <img id="img" src="<?=latticeurl::site($dataImagesItem['img']->original->fullpath);?>" width="<?=$dataImagesItem['img']->original->width;?>" height="<?=$dataImagesItem['img']->original->height;?>" alt="<?=$dataImagesItem['img']->original->filename;?>" />
				    <?endif;?>
<h2><?=$dataImagesItem['title'];?></h2>
   <p class="caption"> <?=$dataImagesItem['caption'];?></p>
-->
  </div>
<?endforeach;?>
</div>
</div>




</div>
