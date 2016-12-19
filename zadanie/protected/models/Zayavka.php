<?php

/**
 * This is the model class for table "zayavka".
 *
 * The followings are the available columns in table 'zayavka':
 * @property integer $id
 * @property string $text
 * @property integer $odobreno
 * @property string $prichina
 * @property integer $user_data_id
 * @property string $from_user
 */
class Zayavka extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'zayavka';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('odobreno, user_data_id', 'numerical', 'integerOnly'=>true),
			array('prichina', 'length', 'max'=>500),
			array('from_user', 'length', 'max'=>50),
			array('text', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, text, odobreno, prichina, user_data_id, from_user', 'safe', 'on'=>'search'),
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
			'text' => 'Text',
			'odobreno' => 'Odobreno',
			'prichina' => 'Prichina',
			'user_data_id' => 'User Data',
			'from_user' => 'From User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('odobreno',$this->odobreno);
		$criteria->compare('prichina',$this->prichina,true);
		$criteria->compare('user_data_id',$this->user_data_id);
		$criteria->compare('from_user',$this->from_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Zayavka the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
