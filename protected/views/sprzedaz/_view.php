<?php
/* @var $this SprzedazController */
/* @var $data ZakupSprzedaz */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dowod')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dowod), array('view', 'id'=>$data->dowod)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transakcjaVAT')); ?>:</b>
	<?php echo CHtml::encode($data->transakcjaVAT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nr_dokumentu')); ?>:</b>
	<?php echo CHtml::encode($data->nr_dokumentu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('netto')); ?>:</b>
	<?php echo CHtml::encode($data->netto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vat')); ?>:</b>
	<?php echo CHtml::encode($data->vat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brutto')); ?>:</b>
	<?php echo CHtml::encode($data->brutto); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_kontrahenci_symbol')); ?>:</b>
	<?php echo CHtml::encode($data->fk_kontrahenci_symbol); ?>
	<br />

	*/ ?>

</div>