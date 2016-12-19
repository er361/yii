<?php
//стили чтобы скрыть код
$cs = Yii::app()->getClientScript();
$cs->registerCss('hide_code','.code{display:none;}');
?>
    <h1>Spravkas</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>