<?php
/* @var $this TemplateController */

$this->breadcrumbs=array(
	'Template',
);
?>
<h1>Страничка для создания шаблона справки</h1>

<?php $this->widget('ext.ckeditor.CKEditor',array(
	'model' => $model
)) ?>
