<?php
/* @var $this ZayavkaController */
/* @var $data Zayavka */
//стили чтобы скрыть код
$cs = Yii::app()->getClientScript();

$cs->registerCss('','.delete{display:none;}');
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php
	$model = UserData::model()->findByPk($data->user_data_id);
	eval('?>' . $data->text); ?>
	<?php
	$formModel = Zayavka::model()->findByPk($data->id);
	$this->renderPartial('_form', array('model'=>$formModel)); ?>


</div>