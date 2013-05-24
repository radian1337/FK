<?php
/* @var $this DekretacjaKsiegowanieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dekretacja Ksiegowanie',
);

$this->menu=array(
	array('label'=>'Create DekretacjaKsiegowanie', 'url'=>array('create')),
	array('label'=>'Manage DekretacjaKsiegowanie', 'url'=>array('admin')),
);
?>

<h1>Dekretacja i księgowanie</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
