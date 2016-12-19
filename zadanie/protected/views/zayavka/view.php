<?php
/* @var $this ZayavkaController */
/* @var $model Zayavka */

$this->breadcrumbs=array(
	'Zayavkas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Zayavka', 'url'=>array('index')),
	array('label'=>'Create Zayavka', 'url'=>array('create')),
	array('label'=>'Update Zayavka', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Zayavka', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Zayavka', 'url'=>array('admin')),
);
?>

<h1>View Zayavka #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'text',
		'odobreno',
		'prichina',
	),
)); ?>
