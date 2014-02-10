<?php
/* @var $this DeveloperController */
/* @var $model Developer */

$this->breadcrumbs=array(
	'Developers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Developer', 'url'=>array('index')),
	array('label'=>'Create Developer', 'url'=>array('create')),
	array('label'=>'View Developer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Developer', 'url'=>array('admin')),
);
?>

<h1>Update Developer <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>