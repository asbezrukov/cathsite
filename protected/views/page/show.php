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
	        <div class="page-title clearfix">
	            <div class="row">
	                <div class="col-md-12">
	                    <h6><a href="/">Главная</a></h6>
	                    <h6><span class="page-active"><?php echo CHtml::encode($page->title); ?></span></h6>
	                    <div class="grid-or-list">
	                        <ul>
	                            <li><a href="?r=page/update&p_name=<?=$page->p_name?>" title="Редактировать"><img src="/images/edit.png"></a></li>
	                            <li><a href="?r=page/delete&p_name=<?=$page->p_name?>" title="Удалить"><img src="/images/delete.png"></a></li>
	                        </ul>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	
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