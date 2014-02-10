<?php
/* @var $this CandidateStatusController */
/* @var $model CandidateStatus */

$this->breadcrumbs=array(
	'Candidate Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CandidateStatus', 'url'=>array('index')),
	array('label'=>'Create CandidateStatus', 'url'=>array('create')),
	array('label'=>'Update CandidateStatus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CandidateStatus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CandidateStatus', 'url'=>array('admin')),
);
?>

<h1>View CandidateStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status_name',
	),
)); ?>
