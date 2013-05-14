<?php
/* @var $this KontrahenciController */
/* @var $model Kontrahenci */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'symbol'); ?>
		<?php echo $form->textField($model,'symbol'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nazwa'); ?>
		<?php echo $form->textField($model,'nazwa',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adres'); ?>
		<?php echo $form->textField($model,'adres',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'miejscowosc'); ?>
		<?php echo $form->textField($model,'miejscowosc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->