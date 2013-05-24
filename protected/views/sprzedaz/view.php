<?php
/* @var $this SprzedazController */
/* @var $model ZakupSprzedaz */

$this->breadcrumbs=array(
	'Zakup Sprzedazs'=>array('index'),
	$model->dowod,
);

$this->menu=array(
	array('label'=>'List ZakupSprzedaz', 'url'=>array('index')),
	array('label'=>'Create ZakupSprzedaz', 'url'=>array('create')),
	array('label'=>'Update ZakupSprzedaz', 'url'=>array('update', 'id'=>$model->dowod)),
	array('label'=>'Delete ZakupSprzedaz', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dowod),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ZakupSprzedaz', 'url'=>array('admin')),
);
?>

<h1>View ZakupSprzedaz #<?php echo $model->dowod; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dowod',
		'transakcjaVAT',
		'data',
		'nr_dokumentu',
		'netto',
		'vat',
		'brutto',
		'fk_kontrahenci_symbol',
	),
)); ?>
