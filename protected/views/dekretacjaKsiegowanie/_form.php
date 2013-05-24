<?php
/* @var $this DekretacjaKsiegowanieController */
/* @var $model DekretacjaKsiegowanie */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dekretacja-ksiegowanie-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'zadekretowal'); ?>
		<?php echo $form->textField($model,'zadekretowal',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'zadekretowal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zaksiegowane'); ?>
		<?php echo $form->textField($model,'zaksiegowane'); ?>
		<?php echo $form->error($model,'zaksiegowane'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_zakup_sprzedaz_dowod'); ?>
		<?php echo $form->textField($model,'fk_zakup_sprzedaz_dowod',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'fk_zakup_sprzedaz_dowod'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->