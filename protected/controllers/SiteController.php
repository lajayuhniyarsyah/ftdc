<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;
        $signUp = new Candidate;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
        
        
		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
        
        if(isset($_POST['Members'])){
            $signUp->attributes = $_POST['Members'];
            if($signUp->save()){
                $header = '';
                $mail = '<h2>Hai '.$signUp->full_name.'</h2>
                    Thanks for join to PHP-Indonesia Female Team,<br />
                    To activeate youraccount please Click this link. <a href="'.$this->createAbsoluteUrl('site/mail').'">'.$this->createAbsoluteUrl('site/mail').'</a>
                ';
                
                      
                $this->redirect(array('signUpSuccess','id'=>$signUp->id));
            }
        }
		// display the login form
		$this->render('login',array('model'=>$model,'signUp'=>$signUp));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
    
    public function actionSignUp(){
        $model = new Candidate;
        $photo = new CandidatePhoto;
        if(isset($_POST['Candidate']))
        {
            $model->attributes = $_POST['Candidate'];
            
            if($model->validate())
            {
                
                $model->birth_date = DateTime::createFromFormat('d-m-Y',$model->birth_date)->format('Y-m-d');
                if($model->save()){
                    
                    $uploadedFiles = CUploadedFile::getInstances($photo,'fileToUpload');
                    
                    foreach($uploadedFiles as $file){
                        $newPhoto= new CandidatePhoto;
                        $newPhoto->fileToUpload = $file;
                        $newPhoto->file = rand(0,100).time().rand(0,100).'.'.$file->extensionName;
                        $newPhoto->candidate_id = $model->id;
                        if($newPhoto->fileToUpload->saveAs(Yii::app()->basePath.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'images'.DIRECTORY_SEPARATOR.'candidates'.DIRECTORY_SEPARATOR.$newPhoto->file)){
                            $newPhoto->save();
                        }
                    }
                    
                    
                    
                }
                $this->redirect(array('SignUpSuccess','id'=>$model->id));
            }
        }
        $this->render('signUp',array('model'=>$model,'photo'=>$photo));
    }
    
    public function actionSignUpSuccess($id)
    {
        $model = Candidate::model()->findByPk($id);
        if(!$model){
            throw new CHttpException(404, 'Data Not Found');
        }
        $this->render('signUpSuccess',array('model'=>$model));
    }
}