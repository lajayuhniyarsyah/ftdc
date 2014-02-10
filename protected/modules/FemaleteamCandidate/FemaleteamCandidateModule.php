<?php
class FemaleteamCandidateModule extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application
        
        
       // $this->layoutPath = Yii::getPathOfAlias('ProductCollect.views.layouts');
        
		// import the module-level models and components
		$this->setImport(array(
			'FemaleteamCandidate.models.*',
			'FemaleteamCandidate.components.*',
		));
        
        /*$this->setComponents(array(
            'errorHandler' => array(
                'errorAction' => 'ProductCollect/default/error'),
            'user' => array(
                'class' => 'CWebUser',
                'loginUrl' => Yii::app()->createUrl('ProductCollect/default/login'),
            )
        ));*/

        
 
        // Yii::app()->user->setStateKeyPrefix('_members');
	}

	/*public function beforeControllerAction($controller, $action)
	{
		if (parent::beforeControllerAction($controller, $action)) {
            // this method is called before any module controller action is performed
            // you may place customized code here
            $route = $controller->id . '/' . $action->id;
           // echo $route;
            $publicPages = array(
                'default/login',
                'default/error',
            );
            if (Yii::app()->getModule('ProductCollect')->user->isGuest && !in_array($route, $publicPages)){            
                Yii::app()->getModule('ProductCollect')->user->loginRequired();                
            }
            else
                return true;
        }
        else
            return false;
	}*/
}
