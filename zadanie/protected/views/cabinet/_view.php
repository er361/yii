<?php
/**
 * Created by PhpStorm.
 * User: Erbol
 * Date: 20.12.2016
 * Time: 3:24
 */
$this->menu=array(
    array('label'=>'List zayavok', 'url'=>array('list')),
    array('label'=>'Create', 'url'=>array('index'))
);
?>
<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('odobreno')); ?>:</b>
<?php
if($data->odobreno){
    echo 'да';
}else{
    echo 'нет';
}
?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
<?php
$model = UserData::model()->findByPk($data->user_data_id);
eval('?>' . $data->text); ?>
</div>