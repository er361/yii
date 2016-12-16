<?php

class CabinetController extends Controller
{
	public function actionIndex()
	{
		$model=new UserDataModel;

		// uncomment the following code to enable ajax-based validation

        if(isset($_POST['ajax']) && $_POST['ajax']==='user-data-model-_form-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }


		if(isset($_POST['UserDataModel']))
		{
			$model->attributes=$_POST['UserDataModel'];
			if($model->validate())
			{
				// form inputs are valid, do something here
				return;
			}
		}
		$this->render('_form',array('model'=>$model));
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
              'users'=>array('@')),
            array('deny'),
        );
    }
/*
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
	*/
}