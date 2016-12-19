<?php

class CabinetController extends Controller
{
	public $layout='//layouts/column2';
	public function actionIndex()
	{
		$model=new UserData();

		// uncomment the following code to enable ajax-based validation

        if(isset($_POST['ajax']) && $_POST['ajax']==='user-data-model-_form-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }


		if(isset($_POST['UserData']))
		{
			$model->attributes=$_POST['UserData'];
			if($model->validate())
			{
                $model->save();
                //созадать заявку на основе данных с этой модели
                $this->generateZv($model);
			}
            $this->redirect(Yii::app()->getUrlManager()->createUrl('cabinet/index'));
		}
		$this->render('index',array('model'=>$model));
	}

	public function actionList(){
		$criteria = new CDbCriteria;
		$criteria->condition = 'from_user = :userId';
		$criteria->params = array(':userId'=>Yii::app()->getUser()->id);
		$dataProvider=new CActiveDataProvider('Zayavka',array(
			'criteria'=>$criteria
		));
		$this->render('list',array(
			'dataProvider'=>$dataProvider,
		));
	}
    public function generateZv($model){
        $template = Spravka::model()->findByAttributes(array('type'=>$model->type));
        $zv = new Zayavka;
        $zv->text = $template->template;
        $zv->user_data_id = $model->id;
        $zv->save();
    }

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