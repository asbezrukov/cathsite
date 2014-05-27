<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
/*
Yii::app()->getClientScript()->registerScriptFile( Yii::app()->baseUrl.'/protected/extensions/tinymce_4.0.25/tinymce/js/tinymce/tinymce.min.js' );
*/
?>

<html>
	<head>
	<script type="text/javascript" src="/protected/extensions/tinymce_4.0.25/tinymce/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
		selector: "textarea",
		theme: "modern",
		language: "ru",
		plugins: [
			"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars code fullscreen",
			"insertdatetime media nonbreaking save table contextmenu directionality",
			"emoticons template paste textcolor"
		],
		toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		toolbar2: "print preview media | forecolor backcolor emoticons",
		image_advtab: true
		});
	</script>
		
	</head>
	<body>
		<div class="container">
	        <div class="row">
	            <div class="col-md-12">
	            	<div class="pluginForm"> 
						<form method="post" action="/page/save/<?=$page->p_name?>">
							<div class="pluginBody">  Наименование <input name="p_name" type="text" value="<?=$page->p_name?>"/></div>
							<div class="pluginBody">  Заголовок <input name="title" type="text" value="<?=$page->title?>"/></div>
							<div class="pluginBody">  Категория 
								<select name="category">
									<option <?php if($page->category == 'cath') echo 'selected'?> value="cath">Кафедра</option>
									<option <?php if($page->category == 'stud') echo 'selected'?> value="stud">Студентам</option>
									<option <?php if($page->category == 'event') echo 'selected'?> value="event">События</option>
									<option <?php if($page->category == 'contact') echo 'selected'?> value="contact">Контакты</option>
								</select>
							</div>
							<div class="pluginBody"><textarea name="content" style="width:70%;height:400px"><?=$page->content?></textarea></div>
							<div class="pluginBody"><input value="Сохранить" type="submit"/></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>