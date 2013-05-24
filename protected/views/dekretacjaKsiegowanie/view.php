<?php
/* @var $this DekretacjaKsiegowanieController */
/* @var $model DekretacjaKsiegowanie */

$this->breadcrumbs=array(
	'Dekretacja Ksiegowanie'=>array('index'),
	$model->numer_ksiegowy,
);

$this->menu=array(
	array('label'=>'List DekretacjaKsiegowanie', 'url'=>array('index')),
	array('label'=>'Create DekretacjaKsiegowanie', 'url'=>array('create')),
	array('label'=>'Update DekretacjaKsiegowanie', 'url'=>array('update', 'id'=>$model->numer_ksiegowy)),
	array('label'=>'Delete DekretacjaKsiegowanie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->numer_ksiegowy),'confirm'=>'Czy na pewno chcesz usunąć ten rekord?')),
	array('label'=>'Manage DekretacjaKsiegowanie', 'url'=>array('admin')),
);
?>

<h1>Dekretacja i księgowanie<?php echo $model->numer_ksiegowy; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numer_ksiegowy',
		'zadekretowal',
		'zaksiegowane',
		'fk_zakup_sprzedaz_dowod',
	),
)); ?>
