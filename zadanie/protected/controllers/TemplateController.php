<?php

class TemplateController extends Controller
{
	public function actionIndex()
	{
        $model = new SpravkaTemplate;
		$this->render('index');
	}
	public function clearHtml($html)
	{
        $dom = new DOMDocument('1.0');
        $dom->loadHTML($html,LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $spans = $dom->getElementsByTagName('span');
        foreach ($spans as $span) {
//            echo $span->getAttribute('class');
            if($span->getAttribute('class') == 'delete'){
                $self = $span;
                $span->parentNode->removeChild($self);
            }
        }
        return $dom->saveHTML();
	}
	// Uncomment the following methods and override them if needed

	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'accessControl'
		);
	}

	public function accessRules(){
		return array(
			array('allow',
				'users'=>Yii::app()->getModule('user')->getAdmins()),
			array('deny'),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
}