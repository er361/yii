<?php

/**
 * Created by PhpStorm.
 * User: Erbol
 * Date: 19.12.2016
 * Time: 6:09
 */

class CabinetCtrlTest extends PHPUnit_Framework_TestCase
{
    public function GenerateZv(){
        $model = UserData::model()->findByPk(18);
        $template = Spravka::model()->findByAttributes(array('type'=>$model->type));
        $zv = new Zayavka;
        $zv->text = $template->template;
        $zv->user_data_id = $model->id;
        $this->assertTrue($zv->save());
    }
    
    public function testEval(){
        $model = UserData::model()->findByPk(18);
        $zv = Zayavka::model()->findByPk(47);
        $string = '<p><span class="delete">Дата рождения </span><span class="code"><?php echo $model->birthdate; ?></span></p>';
//        echo $zv->text;
//        echo $string;

        eval('?>' . $string .'<?php');
    }
}
