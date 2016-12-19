<?php
/* @var $this ZayavkaController */
/* @var $model Zayavka */

$this->breadcrumbs=array(
	'Zayavkas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Zayavka', 'url'=>array('index')),
	array('label'=>'Create Zayavka', 'url'=>array('create')),
	array('label'=>'View Zayavka', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Zayavka', 'url'=>array('admin')),
);
?>

<h1>Update Zayavka <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>