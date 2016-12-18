<?php
/* @var $this SpravkaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Spravkas',
);

$this->menu=array(
	array('label'=>'Create Spravka', 'url'=>array('create')),
	array('label'=>'Manage Spravka', 'url'=>array('admin')),
);
?>

<h1>Spravkas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
