<?php
/* @var $this ZakupSprzedazController */
/* @var $model ZakupSprzedaz */

$this->breadcrumbs=array(
	'Zakup Sprzedazs'=>array('index'),
	$model->dowod=>array('view','id'=>$model->dowod),
	'Update',
);

$this->menu=array(
	array('label'=>'List ZakupSprzedaz', 'url'=>array('index')),
	array('label'=>'Create ZakupSprzedaz', 'url'=>array('create')),
	array('label'=>'View ZakupSprzedaz', 'url'=>array('view', 'id'=>$model->dowod)),
	array('label'=>'Manage ZakupSprzedaz', 'url'=>array('admin')),
);
?>

<h1>Update ZakupSprzedaz <?php echo $model->dowod; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>