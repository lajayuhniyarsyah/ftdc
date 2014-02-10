<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		
		$attrs = array('username'=>$this->username,'password'=>md5($this->password),'active'=>1);
		// print_r($attrs);
		// die();
		$checkUser = Administrator::model()->findByAttributes($attrs);

		if($checkUser){
			$this->errorCode = self::ERROR_NONE;
			$this->_id = $checkUser->id;
			// Yii::app()->user->setState()
		}else{
			$this->errorCode = self::ERROR_UNKNOWN_IDENTITY;
		}
        return !$this->errorCode;
        
	}
}