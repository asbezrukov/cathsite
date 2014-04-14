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
                    <?php echo $form->labelEx($model,'category'); ?>
                </td>
                <td>
                    <?php echo $form->dropDownList($model,'category', $model->getKeyValueCategories()); ?>
                    <?php echo $form->error($model,'category'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'data_publiction'); ?>
                </td>
                <td>
                    <?php echo $form->dateField($model,'data_publiction'); ?>
                    <?php echo $form->error($model,'data_publiction'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'news_pictures'); ?>
                </td>
                <td>
                    <?php echo $form->fileField($model,'news_pictures'); ?>
                    <?php echo $form->error($model,'news_pictures'); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $form->labelEx($model,'publication_main'); ?>

                </td>
                <td>
                    <?php echo $form->checkBox($model,'publication_main'); ?>
                    <?php echo $form->error($model,'publication_main'); ?>
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
                    <?php echo $form->labelEx($model,'preview'); ?>

                </td>
                <td>
                    <?php echo $form->textArea($model,'preview',array('rows'=>6, 'cols'=>50)); ?>
                    <?php echo $form->error($model,'preview'); ?>

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
                    <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
                </td>

            </tr>
            <?php $this->endWidget(); ?>

        </table>
    </div>
</div><!-- form -->