<?php
/* @var $this ZakupController */
/* @var $model ZakupSprzedaz */

$this->breadcrumbs=array(
	'Zakup Sprzedazs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ZakupSprzedaz', 'url'=>array('index')),
	array('label'=>'Manage ZakupSprzedaz', 'url'=>array('admin')),
);
?>

<h1>Create ZakupSprzedaz</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>