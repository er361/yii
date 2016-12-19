<?php
/* @var $this ZayavkaController */
/* @var $model Zayavka */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'zayavka-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'action'=>Yii::app()->getUrlManager()->createUrl('zayavka/update/'. $model->id)
)); ?>


	<?php echo $form->errorSummary($model); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'odobreno'); ?>
		<?php echo $form->dropDownList($model,'odobreno',array('0'=>'Нет','1'=>'Да')); ?>
		<?php echo $form->error($model,'odobreno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prichina'); ?>
		<?php echo $form->textField($model,'prichina',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'prichina'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->