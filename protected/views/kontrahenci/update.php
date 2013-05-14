<?php
/* @var $this KontrahenciController */
/* @var $model Kontrahenci */

$this->breadcrumbs=array(
	'Kontrahenci'=>array('index'),
	$model->symbol=>array('view','id'=>$model->symbol),
	'Edycja',
);

$this->menu=array(
	array('label'=>'Lista kontrahentów', 'url'=>array('index')),
	array('label'=>'Dodaj kontrahenta', 'url'=>array('create')),
	array('label'=>'Edytuj kontrahenta', 'url'=>array('update', 'id'=>$model->symbol)),
	array('label'=>'Zarządzaj kontrahentami', 'url'=>array('admin')),
);

?>

<h1>Update Kontrahenci <?php echo $model->symbol; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>