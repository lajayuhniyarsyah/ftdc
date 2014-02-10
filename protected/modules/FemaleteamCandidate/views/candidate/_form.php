<?php
/* @var $this CandidateController */
/* @var $model Candidate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'candidate-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'full_name'); ?>
		<?php echo $form->textField($model,'full_name',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'full_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_place'); ?>
		<?php echo $form->textField($model,'birth_place',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'birth_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
		<?php echo $form->error($model,'birth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebook'); ?>
		<?php echo $form->textField($model,'facebook',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phonenumber'); ?>
		<?php echo $form->textField($model,'phonenumber',array('size'=>16,'maxlength'=>16)); ?>
		<?php echo $form->error($model,'phonenumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'domisili'); ?>
		<?php echo $form->textField($model,'domisili',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'domisili'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'full_address'); ?>
		<?php echo $form->textField($model,'full_address',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'full_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->