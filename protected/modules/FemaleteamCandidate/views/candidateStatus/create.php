<?php
/* @var $this CandidateStatusController */
/* @var $model CandidateStatus */

$this->breadcrumbs=array(
	'Candidate Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CandidateStatus', 'url'=>array('index')),
	array('label'=>'Manage CandidateStatus', 'url'=>array('admin')),
);
?>

<h1>Create CandidateStatus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>