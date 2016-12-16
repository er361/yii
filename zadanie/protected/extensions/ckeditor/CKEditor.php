<?php
/**
 * Created by PhpStorm.
 * User: Erbol
 * Date: 16.12.2016
 * Time: 19:08
 */
class CKEditor extends CWidget
{
    public $model;
    public function init()
    {
        $dir = dirname(__FILE__);
        $baseUrl = Yii::app()->getAssetManager()->publish($dir);
        $cs = Yii::app()->getClientScript();
        $cs->registerScriptFile($baseUrl.DIRECTORY_SEPARATOR.'ckeditor.js');
        $cs->registerCssFile($baseUrl.DIRECTORY_SEPARATOR.'plugins'.DIRECTORY_SEPARATOR.'phpcode'.DIRECTORY_SEPARATOR.'styles'.DIRECTORY_SEPARATOR.'style.css');
    }

    public function run()
    {
        $this->render('index');
    }
}