<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
?>

<?php
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'htmlOptions' => array('class' => 'form-signin'),
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
));
echo crypt('demo','34erdfcv');
?>

<h2 class="form-signin-heading">Please sign in</h2>
<div style="margin-bottom:15px; color:red;">
	<?php echo $form->error($model,'username'); ?>
	<?php echo $form->error($model,'password'); ?>
</div>

<?php echo $form->textField($model,'username',array('class' => 'input-block-level', 'placeholder' => 'Username')); ?>
<?php echo $form->passwordField($model,'password',array('class' => 'input-block-level', 'placeholder' => 'Password')); ?>

<button class="btn btn-large btn-primary" type="submit">Sign in</button>

<?php $this->endWidget(); ?>