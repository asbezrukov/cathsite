<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
/*
Yii::app()->getClientScript()->registerScriptFile( Yii::app()->baseUrl.'/protected/extensions/tinymce_4.0.25/tinymce/js/tinymce/tinymce.min.js' );
*/
?>

<html>
	<head>
	</head>
	<body>
		<div class="container">
	        <div class="row">
	            <div class="col-md-12">
	            	<div class="pluginForm"> 
						<div class="pluginBody"><?php echo $page->content; ?></div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>