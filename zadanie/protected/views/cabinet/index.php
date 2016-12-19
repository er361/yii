<?php
/* @var $this CabinetController */

$this->breadcrumbs=array(
	'Cabinet',
);
$this->menu=array(
	array('label'=>'List zayavok', 'url'=>array('list')),
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php $this->renderPartial('_form',array('model'=>$model));?>
