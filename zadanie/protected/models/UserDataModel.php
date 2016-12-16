<?php

/**
 * Created by PhpStorm.
 * User: Erbol
 * Date: 09.12.2016
 * Time: 3:00
 */
class UserDataModel extends CFormModel
{
    public $name;
    public $familia;
    public $otchestvo;
    public $birthdate;
    public $address;
    public $nationality;
    public $id;
    public $type;

    public function rules()
    {
        return array(
            array('name, familia, otchestvo, birthdate,address, nationality, id,type','required')
        );
    }
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
            'id' => 'Номер уд. личности',
            );
    }
}