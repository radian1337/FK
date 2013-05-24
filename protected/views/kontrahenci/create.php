<?php
/* @var $this KontrahenciController */
/* @var $model Kontrahenci */

$this->breadcrumbs=array(
	'Kontrahencis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kontrahenci', 'url'=>array('index')),
	array('label'=>'Manage Kontrahenci', 'url'=>array('admin')),
);
?>

<h1>Create Kontrahenci</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>