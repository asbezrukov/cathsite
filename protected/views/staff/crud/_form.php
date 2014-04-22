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
			<?php echo $form->labelEx($model,'surname'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'surname'); ?>
			<?php echo $form->error($model,'surname'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'name'); ?> 
		</td>
		<td>
			<?php echo $form->textField($model,'name'); ?>
			<?php echo $form->error($model,'name'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'patronymic'); ?>
		
		</td>
		<td>
			<?php echo $form->textField($model,'patronymic'); ?>
		    <?php echo $form->error($model,'patronymic'); ?>
		</td>
	</tr>
	<tr> 
		<td>	
			<?php echo $form->labelEx($model,'photo'); ?>
		
		</td>
		<td>
			<?php echo $form->fileField($model,'photo'); ?>
		    <?php echo $form->error($model,'photo'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'prof_interest'); ?>
		
		</td>
		<td>
			<?php echo $form->textArea($model,'prof_interest',array('rows'=>6, 'cols'=>50)); ?>
		    <?php echo $form->error($model,'prof_interest'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'projects'); ?>
		</td>
		<td>
			<?php echo $form->textArea($model,'projects',array('rows'=>6, 'cols'=>50)); ?>
		    <?php echo $form->error($model,'projects'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'languages'); ?>
		</td>
		<td>
			<?php echo $form->textArea($model,'languages',array('rows'=>6, 'cols'=>50)); ?>
		    <?php echo $form->error($model,'languages'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'begin_date'); ?>
		</td>
		<td>
		    <?php echo $form->dateField($model,'begin_date'); ?>
		    <?php echo $form->error($model,'begin_date'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'email'); ?>
		
		</td>
		<td>
			<?php echo $form->textField($model,'email'); ?>
		    <?php echo $form->error($model,'email'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'phone'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'phone'); ?>
		    <?php echo $form->error($model,'phone'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'degree'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'degree'); ?>
		    <?php echo $form->error($model,'degree'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'lecturer'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'lecturer'); ?>
		    <?php echo $form->error($model,'lecturer'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'position'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'position'); ?>
		    <?php echo $form->error($model,'position'); ?>
		</td>
	</tr>
	<tr> 
		<td>	
			<?php echo $form->labelEx($model,'training'); ?>
		</td>
		<td>
			<?php echo $form->textArea($model,'training',array('rows'=>6, 'cols'=>50)); ?>
		    <?php echo $form->error($model,'training'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'consult_time'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'consult_time'); ?>
		    <?php echo $form->error($model,'consult_time'); ?>
		</td>
	</tr>
	<tr> 
		<td>
			<?php echo $form->labelEx($model,'rank'); ?>
		</td>
		<td>
			<?php echo $form->textField($model,'rank'); ?>
		    <?php echo $form->error($model,'rank'); ?>
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