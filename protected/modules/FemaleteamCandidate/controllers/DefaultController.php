<?php

class DefaultController extends Controller
{
	public $layout='//layouts/column2';
	public function actionIndex()
	{
        $this->menu = array(
        	array(
				'label'=>'Candidate',
				'url'=>array('candidate/admin'),
				'visible'=>!Yii::app()->user->isGuest
			)
        );
		$this->render('index');
	}
    public function actionRegister(){
        $model = new Candidate;
        
        $this->render('register',array('model'=>$model));
    }
}