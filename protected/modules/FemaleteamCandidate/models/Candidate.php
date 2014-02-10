<?php

/**
 * This is the model class for table "femaleteam_candidate".
 *
 * The followings are the available columns in table 'femaleteam_candidate':
 * @property integer $id
 * @property string $full_name
 * @property string $birth_place
 * @property string $birth_date
 * @property string $email
 * @property string $phonenumber
 * @property string $domisili
 * @property string $full_address
 * @property integer $status
 */
class Candidate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Candidate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return CDbConnection database connection
	 */
	/*public function getDbConnection()
	{
		return Yii::app()->ftdb;
	}*/

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'femaleteam_candidate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('full_name, birth_place, birth_date, email, phonenumber, domisili, full_address, status, facebook', 'required'),
            array('email','email'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('full_name, email, domisili', 'length', 'max'=>64),
			array('facebook', 'length', 'max'=>90),
			array('birth_place', 'length', 'max'=>32),
            array('phonenumber', 'length', 'max'=>16),
			array('full_address', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, full_name, birth_place, birth_date, email, phonenumber, domisili, full_address, status', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'CandidatePhotos'=>array(self::HAS_MANY,'CandidatePhoto','candidate_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'full_name' => 'Full Name',
			'birth_place' => 'Birth Place',
			'birth_date' => 'Birth Date',
			'email' => 'Email',
			'phonenumber' => 'Phonenumber',
			'domisili' => 'Domisili',
			'full_address' => 'Full Address',
			'status' => 'Status',
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
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('birth_place',$this->birth_place,true);
		$criteria->compare('birth_date',$this->birth_date,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phonenumber',$this->phonenumber,true);
		$criteria->compare('domisili',$this->domisili,true);
		$criteria->compare('full_address',$this->full_address,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function mapThumbnail(){
		$arr = array();
		foreach($this->CandidatePhotos as $photo):
			$arr[] = array('image'=>Yii::app()->baseUrl.'/images/candidates/'.$photo->file);
		endforeach;
		return $arr;
	}
}