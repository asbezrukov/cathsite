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
		plugins: [
			"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars code fullscreen",
			"insertdatetime media nonbreaking save table contextmenu directionality",
			"emoticons template paste textcolor"
		],
		toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		toolbar2: "print preview media | forecolor backcolor emoticons",
		image_advtab: true,
		templates: [
			{title: 'Test template 1', content: 'Test 1'},
			{title: 'Test template 2', content: 'Test 2'}
		]
		});
	</script>
		
	</head>
	<body>
		<form method="post" action="?r=page/create">
			<input name="title" type="text"/>
			<textarea name="content" style="width:100%"></textarea>
			<input value="Сохранить" type="submit"/>
		</form>
	</body>
</html>