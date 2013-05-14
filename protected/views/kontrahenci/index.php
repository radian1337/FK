<?php
/* @var $this KontrahenciController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Kontrahenci',
);

$this->menu=array(
	array('label'=>'Dodaj konrahenta', 'url'=>array('create')),
	array('label'=>'Zarządzaj kontrahentami', 'url'=>array('admin')),
);
?>

<h1>Kontrahenci</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
