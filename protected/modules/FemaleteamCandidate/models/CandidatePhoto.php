<?php

/**
 * This is the model class for table "femaleteam_candidate_photo".
 *
 * The followings are the available columns in table 'femaleteam_candidate_photo':
 * @property integer $id
 * @property string $file
 * @property string $uploaded_on
 */
class CandidatePhoto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CandidatePhoto the static model class
	 */
    public $fileToUpload;
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
		return 'femaleteam_candidate_photo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('file', 'required'),
			array('file', 'length', 'max'=>30),
            
            array('fileToUpload','file','types'=>'jpeg,JPEG,jpg,JPG,png,PNG'),

            array('candidate_id','exist','className'=>'Candidate','attributeName'=>'id'),

			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, file, uploaded_on', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'file' => 'File',
			'uploaded_on' => 'Uploaded On',
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
		$criteria->compare('file',$this->file,true);
		$criteria->compare('uploaded_on',$this->uploaded_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}