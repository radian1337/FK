<?php
/* @var $this KontrahenciController */
/* @var $model Kontrahenci */

$this->breadcrumbs=array(
	'Kontrahenci'=>array('index'),
	'Dodawanie',
);


$this->menu=array(
	array('label'=>'Lista kontrahentów', 'url'=>array('index')),
	array('label'=>'Zarządzaj kontrahentami', 'url'=>array('admin')),
);

?>

<h1>Create Kontrahenci</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>