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
    'htmlOptions'=>array(
        'enctype'=>'multipart/form-data',
    )
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'full_name',array('span'=>5,'maxlength'=>64)); ?>

            <?php echo $form->textFieldControlGroup($model,'birth_place',array('span'=>5,'maxlength'=>32)); ?>

            <?php
                Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl.'/css/datepicker.css');
                Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/bootstrap-datepicker.js');
                Yii::app()->clientScript->registerScript('bootstrapDatepicker','
                    jQuery(\'#dpYears\').datepicker();
                ');
                /*
                $this->widget('zii.widgets.jui.CJuiDatePicker',array(
                    'model'=>$model,
                    'attribute'=>'birth_date',
                    // additional javascript options for the date picker plugin
                    'options'=>array(
                        'showAnim'=>'fold',
                    ),
                    'htmlOptions'=>array(
                        'style'=>'height:20px;'
                    ),
                ));
                */                                                
                
                /*
                echo '<div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="" id="dpYears" class="input-append date">
                        <input type="text" readonly="" value="" size="16" class="span2">
                        <span class="add-on"><i class="icon-calendar"></i></span>
                    </div>';
                */
                echo '<div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="" id="dpYears" class="input-append date control-group">
                        ';
                        echo CHtml::activeLabelEx($model,'birth_date');
                        echo CHtml::activeTextField($model,'birth_date',array('class'=>'span3','readonly'=>true));
                         
                        echo '
                        <span class="add-on"><i class="icon-calendar"></i></span>
                    </div>';
                    echo CHtml::error($model,'birth_date');
            ?>

            <?php echo $form->textFieldControlGroup($model,'email',array('span'=>5,'maxlength'=>64)); ?>

            <?php echo $form->textFieldControlGroup($model,'facebook',array('span'=>5,'maxlength'=>90)); ?>

            <?php echo $form->textFieldControlGroup($model,'phonenumber',array('span'=>5,'maxlength'=>40)); ?>
            
            <?php echo $form->textFieldControlGroup($model,'domisili',array('span'=>5,'maxlength'=>40)); ?>
            
            <?php //echo $form->textFieldControlGroup($model,'phonenumber',array('span'=>5,'maxlength'=>40)); ?>
            
            <?php echo $form->textAreaControlGroup($model,'full_address',array('style'=>'width:459px;height:200px;')); ?>
            
            <?php echo $form->dropDownListControlGroup($model,'status',CHtml::listData(CandidateStatus::model()->findAll(),'id','status_name'),array('prompt'=>'...')); ?>

    
    
    
    <fieldset>
        <legend>Photo</legend>
        
        <div id="fileFieldRow">
        <?php
            Yii::app()->clientScript->registerScript('dynamicFileField','
                var curr = 0;
                jQuery(\'#btnAddMorePhoto\').click(function(){
                    var element = \''.$form->fileFieldControlGroup($photo,'fileToUpload[]').'\';
                    jQuery(\'#fileFieldRow .control-group:last\').after(element);
                    return false;
                });
            ');
        ?>
        <?php echo $form->fileFieldControlGroup($photo,'fileToUpload[]'); ?>
        <?php
        echo TbHtml::link('Add More Photo','#',array(
            'class'=>'btn btn-danger btn-mini',
            'id'=>'btnAddMorePhoto'
		));
        ?>
        </div>
    </fieldset>
    
    
    <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->