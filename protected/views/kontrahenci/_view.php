<?php
/* @var $this KontrahenciController */
/* @var $data Kontrahenci */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('symbol')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->symbol), array('view', 'id'=>$data->symbol)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazwa')); ?>:</b>
	<?php echo CHtml::encode($data->nazwa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
	<?php echo CHtml::encode($data->nip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adres')); ?>:</b>
	<?php echo CHtml::encode($data->adres); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('miejscowosc')); ?>:</b>
	<?php echo CHtml::encode($data->miejscowosc); ?>
	<br />


</div>