<?php
/* @var $this CandidateStatusController */
/* @var $data CandidateStatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_name')); ?>:</b>
	<?php echo CHtml::encode($data->status_name); ?>
	<br />


</div>