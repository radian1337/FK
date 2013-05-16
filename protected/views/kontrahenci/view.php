<?php
/* @var $this KontrahenciController */
/* @var $model Kontrahenci */

$this->breadcrumbs=array(
	'Kontrahenci'=>array('index'),
	$model->symbol,
);

$this->menu=array(
	array('label'=>'Lista kontrahentów', 'url'=>array('index')),
	array('label'=>'Dodaj kontrahenta', 'url'=>array('create')),
	array('label'=>'Edytuj kontrahenta', 'url'=>array('update', 'id'=>$model->symbol)),
	array('label'=>'Usuń kontrahenta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->symbol),'confirm'=>'Czy na pewno chcesz usunąć rekord?')),
	array('label'=>'Zarządzaj kontrahentami', 'url'=>array('admin')),
);
?>

<h1>Kontrahenci #<?php echo $model->symbol; ?></h1>

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
