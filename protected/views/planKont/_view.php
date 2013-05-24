<?php
/* @var $this PlanKontController */
/* @var $data PlanKont */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('numer')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->numer), array('view', 'id'=>$data->numer)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazwa')); ?>:</b>
	<?php echo CHtml::encode($data->nazwa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opis')); ?>:</b>
	<?php echo CHtml::encode($data->opis); ?>
	<br />


</div>