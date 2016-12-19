<?php
/* @var $this UserDataModelController */
/* @var $model UserDataModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-data-model-_form-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>  


	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type',array('work'=>'С места работы','home'=>'По месту жительства')); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'familia'); ?>
		<?php echo $form->textField($model,'familia'); ?>
		<?php echo $form->error($model,'familia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otchestvo'); ?>
		<?php echo $form->textField($model,'otchestvo'); ?>
		<?php echo $form->error($model,'otchestvo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'birthdate'); ?>
		<?php echo $form->textField($model,'birthdate'); ?>
		<?php echo $form->error($model,'birthdate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address'); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality'); ?>
		<?php echo $form->error($model,'nationality'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_number'); ?>
		<?php echo $form->textField($model,'id_number'); ?>
		<?php echo $form->error($model,'id_number'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->