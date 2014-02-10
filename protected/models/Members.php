<?php

/**
 * This is the model class for table "members".
 *
 * The followings are the available columns in table 'members':
 * @property integer $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string $full_name
 * @property string $phone
 * @property integer $status
 * @property string $created
 */
class Members extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Members the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, username, password, full_name', 'required'),
            array('phone','required','on'=>'step1'),
            array('email','email','checkMX'=>true),
            array('created','default','value'=>new CDbExpression('NOW()')),
			array('status', 'numerical', 'integerOnly'=>true),
			array('email, username, password', 'length', 'max'=>100),
			array('full_name', 'length', 'max'=>50),
			array('phone', 'length', 'max'=>20),
            array('key','length','max'=>80),
            array('key','unique'),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, email, username, password, full_name, phone, status, created', 'safe', 'on'=>'search'),
		);
	}
    
    public function beforeSave(){
        if($this->scenario=='step1'){
            $this->key = crypt($this->full_name.'-'.$this->username.time(),$this->password.'-'.md5($this->email)).time();
            
        }
        return true;
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'username' => 'Username',
			'password' => 'Password',
			'full_name' => 'Full Name',
			'phone' => 'Phone',
			'status' => 'Status',
			'created' => 'Created',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}