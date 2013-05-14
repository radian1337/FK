<?php
/* @var $this KontrahenciController */
/* @var $model Kontrahenci */

$this->breadcrumbs=array(
	'Kontrahenci'=>array('index'),
	'Zarządzanie',
);

$this->menu=array(
	array('label'=>'Lista kontrahentów', 'url'=>array('index')),
	array('label'=>'Dodaj kontrahenta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kontrahenci-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Kontrahencis</h1>

<p>
Możesz opcjonalnie użyć operatora porównania (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
lub <b>=</b>) na początku każdego szukanego rekordu.
</p>

<?php echo CHtml::link('Zaawansowane szukanie','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kontrahenci-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'symbol',
		'nazwa',
		'nip',
		'adres',
		'miejscowosc',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
