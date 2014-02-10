<?php
/* @var $this DeveloperController */
/* @var $model Developer */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'register-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'full_name',array('span'=>5,'maxlength'=>64)); ?>

            <?php echo $form->textFieldControlGroup($model,'birth_place',array('span'=>5,'maxlength'=>32)); ?>

            <?php
                Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/datepicker.css');
                Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/bootstrap-datepicker.js');
                Yii::app()->clientScript->registerScript('bootstrapDatepicker','
                    jQuery(\'.datepicker\').datepicker();
                ');
                echo $form->textFieldControlGroup($model,'birth_date',array('span'=>5,'maxlength'=>20,'class'=>'datepicker'));
            ?>

            <?php echo $form->textFieldControlGroup($model,'email',array('span'=>5,'maxlength'=>20)); ?>

            <?php echo $form->textFieldControlGroup($model,'phonenumber',array('span'=>5,'maxlength'=>40)); ?>
            
            <?php echo $form->textFieldControlGroup($model,'domisili',array('span'=>5,'maxlength'=>40)); ?>
            
            <?php echo $form->textFieldControlGroup($model,'phonenumber',array('span'=>5,'maxlength'=>40)); ?>
            
            <?php echo $form->textAreaControlGroup($model,'full_address',array('style'=>'width:459px;height:200px;')); ?>
            
            <?php echo $form->dropDownListControlGroup($model,'status',CHtml::listData(CandidateStatus::model()->findAll(),'id','status_name'),array('prompt'=>'...')); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->