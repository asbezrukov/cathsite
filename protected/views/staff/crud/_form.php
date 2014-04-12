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
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textArea($model,'surname',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textArea($model,'name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'patronymic'); ?>
		<?php echo $form->textArea($model,'patronymic',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'patronymic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo $form->textArea($model,'photo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prof_interest'); ?>
		<?php echo $form->textArea($model,'prof_interest',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'prof_interest'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projects'); ?>
		<?php echo $form->textArea($model,'projects',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'projects'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'languages'); ?>
		<?php echo $form->textArea($model,'languages',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'languages'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'begin_date'); ?>
		<?php echo $form->textField($model,'begin_date'); ?>
		<?php echo $form->error($model,'begin_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'degree'); ?>
		<?php echo $form->textField($model,'degree',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'degree'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lecturer'); ?>
		<?php echo $form->textField($model,'lecturer'); ?>
		<?php echo $form->error($model,'lecturer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textArea($model,'position',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'position'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'training'); ?>
		<?php echo $form->textArea($model,'training',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'training'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consult_time'); ?>
		<?php echo $form->textArea($model,'consult_time',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'consult_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rank'); ?>
		<?php echo $form->textArea($model,'rank'); ?>
		<?php echo $form->error($model,'rank'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
<a href=<?=Yii::app()->createUrl('crud/admin', array('mid'=>'news')); ?>>Показать таблицу</a>
</div><!-- form -->