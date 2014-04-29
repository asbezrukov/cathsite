<?php
/* @var $this UsersModelController */
/* @var $model UsersModel */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idUsers'); ?>
		<?php echo $form->textField($model,'idUsers'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee'); ?>
		<?php echo $form->textField($model,'employee'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'student'); ?>
		<?php echo $form->textField($model,'student'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_last_auth'); ?>
		<?php echo $form->textField($model,'date_last_auth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_create'); ?>
		<?php echo $form->textField($model,'date_create'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->