<div class="form">
    <?php $form = $this->beginWidget('CActiveForm');?>

    <div class="row">
        <?php echo $form->label($model,'type')?>
        <?php echo $form->dropDownList($model,'type',array('work'=>'С места работы','home'=>'По месту жительства'));?>
    </div>

    <div class="row">
        <?php echo $form->textArea($model,'template',array('id'=>'editor1','rows'=>10,'cols'=>80))?>
    </div>

    <?php Yii::app()->getClientScript()->registerScript('initCKE','CKEDITOR.replace( \'editor1\' );'); ?>
    <p class="note">Сохраняться через кнопку диска!</p>
    <?php $this->endWidget();?>
</div>
