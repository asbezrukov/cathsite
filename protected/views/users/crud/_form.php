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
			<?php echo $form->labelEx($model,'employee'); ?>
		</td>
		<td>
			<?php echo $form->checkbox($model,'employee'); ?>
			<?php echo $form->error($model,'employee'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'student'); ?> 
		</td>
		<td>
			<?php echo $form->checkbox($model,'student'); ?>
			<?php echo $form->error($model,'student'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'username'); ?>
		
		</td>
		<td>
			<?php echo $form->textField($model,'username'); ?>
		    <?php echo $form->error($model,'username'); ?>
		</td>
	</tr>
	<tr> 
		<td>	
			<?php echo $form->labelEx($model,'password'); ?>
		
		</td>
		<td>
			<?php echo $form->passwordField($model,'password'); ?>
		    <?php echo $form->error($model,'password'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'role'); ?>
		
		</td>
		<td>
			<?php echo $form->textField($model,'role'); ?>
		    <?php echo $form->error($model,'role'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'date_last_auth'); ?>
		</td>
		<td>
			<?php echo $form->dateField($model,'date_last_auth'); ?>
		    <?php echo $form->error($model,'date_last_auth'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'date_create'); ?>
		</td>
		<td>
			<?php echo $form->dateField($model,'date_create'); ?>
		    <?php echo $form->error($model,'date_create'); ?>
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