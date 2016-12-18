<?php
/* @var $this SpravkaController */
/* @var $model Spravka */

$this->breadcrumbs=array(
	'Spravkas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Spravka', 'url'=>array('index')),
	array('label'=>'Manage Spravka', 'url'=>array('admin')),
);
?>

<h1>Create Spravka</h1>

<?php $this->widget('ext.ckeditor.CKEditor',array('model'=>$model)); ?>