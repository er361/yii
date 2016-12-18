<?php
/* @var $this SpravkaController */
/* @var $model Spravka */

$this->breadcrumbs=array(
	'Spravkas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Spravka', 'url'=>array('index')),
	array('label'=>'Create Spravka', 'url'=>array('create')),
	array('label'=>'Update Spravka', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Spravka', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Spravka', 'url'=>array('admin')),
);
?>

<h1>View Spravka #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'template',
	),
)); ?>
