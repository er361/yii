<?php
/* @var $this SpravkaController */
/* @var $data Spravka */
?>
<?php
//стили чтобы скрыть код
$cs = Yii::app()->getClientScript();
$cs->registerCss('hide_code','.code{display:none;}');
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('template')); ?>:</b>
	<?php echo $data->template; ?>
	<br />


</div>