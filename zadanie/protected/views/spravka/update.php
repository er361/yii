<?php
/* @var $this SpravkaController */
/* @var $model Spravka */

$this->breadcrumbs=array(
	'Spravkas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Spravka', 'url'=>array('index')),
	array('label'=>'Create Spravka', 'url'=>array('create')),
	array('label'=>'View Spravka', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Spravka', 'url'=>array('admin')),
);
?>

<h1>Update Spravka <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>