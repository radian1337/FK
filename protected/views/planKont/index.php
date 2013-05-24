<?php
/* @var $this PlanKontController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Plan Konts',
);

$this->menu=array(
	array('label'=>'Create PlanKont', 'url'=>array('create')),
	array('label'=>'Manage PlanKont', 'url'=>array('admin')),
);
?>

<h1>Plan Konts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
