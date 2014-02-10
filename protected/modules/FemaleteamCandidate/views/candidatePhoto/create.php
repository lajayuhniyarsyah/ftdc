<?php
/* @var $this CandidatePhotoController */
/* @var $model CandidatePhoto */

$this->breadcrumbs=array(
	'Candidate Photos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CandidatePhoto', 'url'=>array('index')),
	array('label'=>'Manage CandidatePhoto', 'url'=>array('admin')),
);
?>

<h1>Create CandidatePhoto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>