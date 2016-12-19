<?php

/**
 * This is the model class for table "user_data".
 *
 * The followings are the available columns in table 'user_data':
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property string $familia
 * @property string $otchestvo
 * @property string $birthdate
 * @property string $address
 * @property string $nationality
 * @property string $id_number
 */
class UserData extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user_data';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, name, familia, otchestvo, nationality, id_number', 'length', 'max'=>50),
			array('birthdate', 'length', 'max'=>30),
			array('address', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, type, name, familia, otchestvo, birthdate, address, nationality, id_number', 'safe', 'on'=>'search'),
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
			'zayavka'=>array(self::HAS_ONE,'Zayavka','user_data_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'type'=>'Тип справки',
			'name' => 'Имя',
			'familia' => 'Фамилия',
			'otchestvo' => 'Отчество',
			'birthdate' => 'Дата рождения',
			'address' => 'Адрес',
			'nationality' => 'Национальность',
			'id_number' => 'Номер уд. личности',
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
		$criteria->compare('type',$this->type,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('familia',$this->familia,true);
		$criteria->compare('otchestvo',$this->otchestvo,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('id_number',$this->id_number,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserData the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
