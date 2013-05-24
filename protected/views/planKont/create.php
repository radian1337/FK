<?php
/* @var $this PlanKontController */
/* @var $model PlanKont */

$this->breadcrumbs=array(
	'Plan Konts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PlanKont', 'url'=>array('index')),
	array('label'=>'Manage PlanKont', 'url'=>array('admin')),
);
?>

<h1>Create PlanKont</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>