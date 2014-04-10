<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'news_title'); ?>
		<?php echo $form->textArea($model,'news_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'news_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_announcement'); ?>
		<?php echo $form->textArea($model,'news_announcement',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'news_announcement'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_body'); ?>
		<?php echo $form->textArea($model,'news_body',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'news_body'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_create'); ?>
		<?php echo $form->textField($model,'news_create'); ?>
		<?php echo $form->error($model,'news_create'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<a href=<?=Yii::app()->createUrl('crud/admin', array('mid'=>'news')); ?>>Показать таблицу</a>
</div><!-- form -->