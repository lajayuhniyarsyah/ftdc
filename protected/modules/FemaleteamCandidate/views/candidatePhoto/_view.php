<?php
/* @var $this CandidatePhotoController */
/* @var $data CandidatePhoto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('candidate_id')); ?>:</b>
	<?php echo CHtml::encode($data->candidate_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uploaded_on')); ?>:</b>
	<?php echo CHtml::encode($data->uploaded_on); ?>
	<br />


</div>