<?php
/* @var $this CandidatePhotoController */
/* @var $model CandidatePhoto */

$this->breadcrumbs=array(
	'Candidate Photos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CandidatePhoto', 'url'=>array('index')),
	array('label'=>'Create CandidatePhoto', 'url'=>array('create')),
	array('label'=>'View CandidatePhoto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CandidatePhoto', 'url'=>array('admin')),
);
?>

<h1>Update CandidatePhoto <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>