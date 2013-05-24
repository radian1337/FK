<?php
/* @var $this KontrahenciController */
/* @var $model Kontrahenci */

$this->breadcrumbs=array(
	'Kontrahencis'=>array('index'),
	$model->symbol=>array('view','id'=>$model->symbol),
	'Update',
);

$this->menu=array(
	array('label'=>'List Kontrahenci', 'url'=>array('index')),
	array('label'=>'Create Kontrahenci', 'url'=>array('create')),
	array('label'=>'View Kontrahenci', 'url'=>array('view', 'id'=>$model->symbol)),
	array('label'=>'Manage Kontrahenci', 'url'=>array('admin')),
);
?>

<h1>Update Kontrahenci <?php echo $model->symbol; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>