<?php
/* @var $this DekretacjaKsiegowanieController */
/* @var $model DekretacjaKsiegowanie */

$this->breadcrumbs=array(
	'Dekretacja Ksiegowanie'=>array('index'),
	$model->numer_ksiegowy=>array('view','id'=>$model->numer_ksiegowy),
	'Update',
);

$this->menu=array(
	array('label'=>'List DekretacjaKsiegowanie', 'url'=>array('index')),
	array('label'=>'Create DekretacjaKsiegowanie', 'url'=>array('create')),
	array('label'=>'View DekretacjaKsiegowanie', 'url'=>array('view', 'id'=>$model->numer_ksiegowy)),
	array('label'=>'Manage DekretacjaKsiegowanie', 'url'=>array('admin')),
);
?>

<h1>Dekretacja i księgowanie<?php echo $model->numer_ksiegowy; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>