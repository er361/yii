<?php
/* @var $this ZayavkaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Zayavkas',
);
?>

<h1>Zayavkas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
