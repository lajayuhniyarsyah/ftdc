<?php
/* @var $this CandidatePhotoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Candidate Photos',
);

$this->menu=array(
	array('label'=>'Create CandidatePhoto', 'url'=>array('create')),
	array('label'=>'Manage CandidatePhoto', 'url'=>array('admin')),
);
?>

<h1>Candidate Photos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
