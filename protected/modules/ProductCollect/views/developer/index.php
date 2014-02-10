<?php
/* @var $this DeveloperController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Developers',
);

$this->menu=array(
	array('label'=>'Create Developer', 'url'=>array('create')),
	array('label'=>'Manage Developer', 'url'=>array('admin')),
);
?>

<h1>Developers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
