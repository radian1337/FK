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
		<?php echo $form->labelEx($model,'dowód'); ?>
		<?php echo $form->textField($model,'dowod',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'dowod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transakcja VAT'); ?>
		<?php echo $form->radioButtonList($model, 'transakcjaVAT', array(0=>'Zakup', 1=>'Sprzedaż'), array('separator'=>"   ")); ?>
		<?php echo $form->error($model,'transakcjaVAT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nr dokumentu'); ?>
		<?php echo $form->textField($model,'nr_dokumentu',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nr_dokumentu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'netto'); ?>
		<?php echo $form->textField($model,'netto',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'netto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VAT'); ?>
		<?php echo $form->textField($model,'vat',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'vat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kontrahent'); ?>
		<?php echo $form->dropDownList($model,'fk_kontrahenci_symbol', CHtml::listData(Kontrahenci::model()->findAll(), 'symbol', 'nazwa'));?>   
		<?php echo $form->error($model,'fk_kontrahenci_symbol'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'konto'); ?>
		<?php echo $form->dropDownList($model,'fk_plan_kont_numer', CHtml::listData(PlanKont::model()->findAll(), 'numer', 'nazwa'));?>   
		<?php echo $form->error($model,'fk_plan_kont_numer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->