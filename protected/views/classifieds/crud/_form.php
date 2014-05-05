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
    'htmlOptions' => array('enctype'=>'multipart/form-data')
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="/">Главная</a></h6>
                    <h6><span class="page-active">Форма</span></h6>
                </div>
            </div>
        </div>
    </div>
<div class="tableForm"> 
<table> 
	<tr> <td><p class="note">Поля со <span class="required">*</span> обязательны.</p> </td> <td> </td></tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'date_publication'); ?>
		</td>
		<td>
			<?php echo $form->dateField($model,'date_publication'); ?>
			<?php echo $form->error($model,'date_publication'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'header'); ?> 
		</td>
		<td>
			<?php echo $form->textField($model,'header'); ?>
			<?php echo $form->error($model,'header'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'text'); ?>
		
		</td>
		<td>
			<?php echo $form->textArea($model,'text', array('rows'=>6, 'cols'=>50)); ?>
		    <?php echo $form->error($model,'text'); ?>
		</td>
	</tr>
	<tr> 
		<td>	
			<?php echo $form->labelEx($model,'important'); ?>
		
		</td>
		<td>
			<?php echo $form->checkbox($model,'important'); ?>
		    <?php echo $form->error($model,'important'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
		</td>
		
	</tr>
<?php $this->endWidget(); ?>

</table>
</div>
</div><!-- form -->