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
		<?php echo $form->labelEx($model,'id_news'); ?>
		<?php echo $form->textField($model,'id_news',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'id_news'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->textField($model,'category',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_publication'); ?>
		<?php echo $form->textField($model,'date_publication',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'date_publication'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'news_pictures'); ?>
		<?php echo $form->textArea($model,'news_pictures',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'news_pictures'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'publication_name'); ?>
		<?php echo $form->textField($model,'publication_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'publication_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'header'); ?>
		<?php echo $form->textArea($model,'header',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'header'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prewiew'); ?>
		<?php echo $form->textArea($model,'prewiew',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'prewiew'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'text_description'); ?>
		<?php echo $form->textArea($model,'text_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<a href=<?=Yii::app()->createUrl('crud/admin', array('mid'=>'news')); ?>>Показать таблицу</a>
</div><!-- form -->