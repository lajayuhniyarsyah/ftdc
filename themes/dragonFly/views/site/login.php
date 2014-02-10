<div class="section section_with_padding" id="login">
	<h1>Login</h1>
	<div class="form">
		<?php
		$form=$this->beginWidget('CActiveForm',array(
			'id'=>'loginForm',
			'enableAjaxValidation'=>false,
		));
		?>
			<div class="row">
				<?php echo $form->labelEx($model,'username'); ?>
				<?php 
					echo $form->textField($model,'username',array('class'=>'input_field'));
				?>
				<?php echo $form->error($model,'username'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'password'); ?>
				<?php 
					echo $form->textField($model,'password',array('class'=>'input_field'));
				?>
				<?php echo $form->error($model,'password'); ?>
			</div>
			<div>
				<?php echo CHtml::submitButton('Login'); ?>
			</div>
		<?php
		$this->endWidget();
		?>
		<!--
		<form method="post" name="contactForm" action="">
		    <label for="author">Name:</label> 
		    <input name="author" type="text" class="required input_field" id="author" maxlength="30" />
		    <label for="email">Email:</label>
		    <input name="email" type="text" class="validate-email required input_field" id="email" maxlength="30" />
		    <label for="message">Message:</label>
		    <textarea id="message" name="text" rows="0" cols="0" class="required"></textarea>
		    <input type="submit" class="submit_btn left" name="submit" id="submit" value="Send" />
		    <input type="reset" class="submit_btn right" name="Reset" id="reset" value="Reset" />
		</form>
		-->
	</div>
</div>