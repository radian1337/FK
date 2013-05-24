<?php
/* @var $this ZakupSprzedazController */
/* @var $model ZakupSprzedaz */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'zakup-sprzedaz-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'dowod'); ?>
		<?php echo $form->textField($model,'dowod',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dowod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transakcjaVAT'); ?>
		<?php echo $form->textField($model,'transakcjaVAT'); ?>
		<?php echo $form->error($model,'transakcjaVAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nr_dokumentu'); ?>
		<?php echo $form->textField($model,'nr_dokumentu',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nr_dokumentu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'netto'); ?>
		<?php echo $form->textField($model,'netto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'netto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vat'); ?>
		<?php echo $form->textField($model,'vat',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'vat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brutto'); ?>
		<?php echo $form->textField($model,'brutto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'brutto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_kontrahenci_symbol'); ?>
		<?php echo $form->textField($model,'fk_kontrahenci_symbol',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'fk_kontrahenci_symbol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->