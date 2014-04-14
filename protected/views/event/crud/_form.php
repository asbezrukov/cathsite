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
			<?php echo $form->labelEx($model,'name_event'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'name_event'); ?>
			<?php echo $form->error($model,'name_event'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'id_category'); ?> 
		</td>
		<td>
			<?php echo $form->dropdownlist($model,'id_category', $model->getKeyValueCategories()); ?>
			<?php echo $form->error($model,'id_category'); ?>
		</td>
	</tr>
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
			<?php echo $form->labelEx($model,'hold_date'); ?>
		
		</td>
		<td>
			<?php echo $form->dateField($model,'hold_date'); ?>
		<?php echo $form->error($model,'hold_date'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'text_description'); ?>
		
		</td>
		<td>
			<?php echo $form->textArea($model,'text_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'text_description'); ?>

		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'url_pictures'); ?>
		
		</td>
		<td>
			<?php echo $form->fileField($model,'url_pictures'); ?>
		<?php echo $form->error($model,'url_pictures'); ?>
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