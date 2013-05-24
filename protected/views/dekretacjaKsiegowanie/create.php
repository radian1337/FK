<?php
/* @var $this DekretacjaKsiegowanieController */
/* @var $model DekretacjaKsiegowanie */

$this->breadcrumbs=array(
	'Dekretacja Ksiegowanie'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DekretacjaKsiegowanie', 'url'=>array('index')),
	array('label'=>'Manage DekretacjaKsiegowanie', 'url'=>array('admin')),
);
?>

<h1>Dekretacja i księgowanie</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>