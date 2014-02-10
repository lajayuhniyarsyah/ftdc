<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $feature
 * @property string $version
 * @property string $license
 * @property integer $developer
 * @property integer $category
 * @property string $created
 * @property string $modified
 * @property integer $created_by
 * @property integer $modified_by
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, feature, version, license, developer, category', 'required'),
			array('developer, category, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>80),
			array('version, license', 'length', 'max'=>10),
            array('modified_by','default','value'=>Yii::app()->getModule('ProductCollect')->user->getId(),'on'=>'update'),
            array('created_by','default','value'=>Yii::app()->getModule('ProductCollect')->user->getId(),'on'=>'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, description, feature, version, license, developer, category, created, modified, created_by, modified_by', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'description' => 'Description',
			'feature' => 'Feature',
			'version' => 'Version',
			'license' => 'License',
			'developer' => 'Developer',
			'category' => 'Category',
			'created' => 'Created',
			'modified' => 'Modified',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('feature',$this->feature,true);
		$criteria->compare('version',$this->version,true);
		$criteria->compare('license',$this->license,true);
		$criteria->compare('developer',$this->developer);
		$criteria->compare('category',$this->category);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('modified_by',$this->modified_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}