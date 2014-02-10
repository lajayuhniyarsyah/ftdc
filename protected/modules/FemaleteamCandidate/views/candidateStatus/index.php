<?php
/* @var $this CandidateStatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Candidate Statuses',
);

$this->menu=array(
	array('label'=>'Create CandidateStatus', 'url'=>array('create')),
	array('label'=>'Manage CandidateStatus', 'url'=>array('admin')),
);
?>

<h1>Candidate Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
