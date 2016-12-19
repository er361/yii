<?php
/**
 * Created by PhpStorm.
 * User: Erbol
 * Date: 19.12.2016
 * Time: 22:32
 */
class RelationDbTest extends PHPUnit_Framework_TestCase
{
    public function testActiveDataProvider(){

//        $dataProvider=new CActiveDataProvider('Zayavka',array(
//            'criteria' => array(
//                'with'=>array('user_data')
//            )
//        ));
        $user = UserData::model()->findByPk(24);
        var_dump($user->zayavka->id);
        $zv = Zayavka::model()->findByPk(53);
        var_dump($zv);
    }
}