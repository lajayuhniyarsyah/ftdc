<?php
/* @var $this CandidateStatusController */
/* @var $model CandidateStatus */

$this->breadcrumbs=array(
	'Candidate Statuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CandidateStatus', 'url'=>array('index')),
	array('label'=>'Create CandidateStatus', 'url'=>array('create')),
	array('label'=>'View CandidateStatus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CandidateStatus', 'url'=>array('admin')),
);
?>

<h1>Update CandidateStatus <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>