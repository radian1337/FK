<?php
/* @var $this ZakupController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Zakup Sprzedazs',
);

$this->menu=array(
	array('label'=>'Create ZakupSprzedaz', 'url'=>array('create')),
	array('label'=>'Manage ZakupSprzedaz', 'url'=>array('admin')),
);
?>

<h1>Zakup Sprzedazs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
