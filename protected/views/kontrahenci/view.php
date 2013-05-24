<?php
/* @var $this KontrahenciController */
/* @var $model Kontrahenci */

$this->breadcrumbs=array(
	'Kontrahencis'=>array('index'),
	$model->symbol,
);

$this->menu=array(
	array('label'=>'List Kontrahenci', 'url'=>array('index')),
	array('label'=>'Create Kontrahenci', 'url'=>array('create')),
	array('label'=>'Update Kontrahenci', 'url'=>array('update', 'id'=>$model->symbol)),
	array('label'=>'Delete Kontrahenci', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->symbol),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kontrahenci', 'url'=>array('admin')),
);
?>

<h1>View Kontrahenci #<?php echo $model->symbol; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'symbol',
		'nazwa',
		'nip',
		'adres',
		'miejscowosc',
	),
)); ?>
