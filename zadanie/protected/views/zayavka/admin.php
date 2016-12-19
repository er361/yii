<?php
/* @var $this ZayavkaController */
/* @var $model Zayavka */

$this->breadcrumbs=array(
	'Zayavkas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Zayavka', 'url'=>array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#zayavka-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Zayavkas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'zayavka-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
//		'text:html',
		array(
			'name' => 'text',
			'value'=> $this->renderPartial('_grid_view')
		),
		'odobreno',
		'prichina',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
