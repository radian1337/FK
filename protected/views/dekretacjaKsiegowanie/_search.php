<?php
/* @var $this DekretacjaKsiegowanieController */
/* @var $model DekretacjaKsiegowanie */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'numer_ksiegowy'); ?>
		<?php echo $form->textField($model,'numer_ksiegowy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zadekretowal'); ?>
		<?php echo $form->textField($model,'zadekretowal',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'zaksiegowane'); ?>
		<?php echo $form->textField($model,'zaksiegowane'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_zakup_sprzedaz_dowod'); ?>
		<?php echo $form->textField($model,'fk_zakup_sprzedaz_dowod',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->