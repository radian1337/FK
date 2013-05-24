<?php
/* @var $this DekretacjaKsiegowanieController */
/* @var $data DekretacjaKsiegowanie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('numer_ksiegowy')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->numer_ksiegowy), array('view', 'id'=>$data->numer_ksiegowy)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zadekretowal')); ?>:</b>
	<?php echo CHtml::encode($data->zadekretowal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('zaksiegowane')); ?>:</b>
	<?php echo CHtml::encode($data->zaksiegowane); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_zakup_sprzedaz_dowod')); ?>:</b>
	<?php echo CHtml::encode($data->fk_zakup_sprzedaz_dowod); ?>
	<br />


</div>