<?php
/* @var $this PlanKontController */
/* @var $model PlanKont */

$this->breadcrumbs=array(
	'Plan Konts'=>array('index'),
	$model->numer,
);

$this->menu=array(
	array('label'=>'List PlanKont', 'url'=>array('index')),
	array('label'=>'Create PlanKont', 'url'=>array('create')),
	array('label'=>'Update PlanKont', 'url'=>array('update', 'id'=>$model->numer)),
	array('label'=>'Delete PlanKont', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->numer),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PlanKont', 'url'=>array('admin')),
);
?>

<h1>View PlanKont #<?php echo $model->numer; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numer',
		'nazwa',
		'opis',
	),
)); ?>
