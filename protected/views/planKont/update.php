<?php
/* @var $this PlanKontController */
/* @var $model PlanKont */

$this->breadcrumbs=array(
	'Plan Konts'=>array('index'),
	$model->numer=>array('view','id'=>$model->numer),
	'Update',
);

$this->menu=array(
	array('label'=>'List PlanKont', 'url'=>array('index')),
	array('label'=>'Create PlanKont', 'url'=>array('create')),
	array('label'=>'View PlanKont', 'url'=>array('view', 'id'=>$model->numer)),
	array('label'=>'Manage PlanKont', 'url'=>array('admin')),
);
?>

<h1>Update PlanKont <?php echo $model->numer; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>