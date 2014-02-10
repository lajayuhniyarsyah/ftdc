<?php
/* @var $this CandidateController */
/* @var $model Candidate */

$this->breadcrumbs=array(
	'Candidates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Candidate', 'url'=>array('index')),
	array('label'=>'Create Candidate', 'url'=>array('create')),
	array('label'=>'Update Candidate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Candidate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Candidate', 'url'=>array('admin')),
);
?>

<h1>View Candidate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'full_name',
		'birth_place',
		'birth_date',
		'email',
		'facebook',
		'phonenumber',
		'domisili',
		'full_address',
		'status',
	),
)); ?>
