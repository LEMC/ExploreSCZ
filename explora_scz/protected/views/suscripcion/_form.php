<?php
/* @var $this SuscripcionController */
/* @var $model Suscripcion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'suscripcion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		<?php echo $form->textField($model,'fecha_fin'); ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_plan_fk'); ?>
		<?php echo $form->textField($model,'id_plan_fk'); ?>
		<?php echo $form->error($model,'id_plan_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_suscriptor'); ?>
		<?php echo $form->textField($model,'id_suscriptor'); ?>
		<?php echo $form->error($model,'id_suscriptor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_suscriptor_fk'); ?>
		<?php echo $form->textField($model,'id_tipo_suscriptor_fk'); ?>
		<?php echo $form->error($model,'id_tipo_suscriptor_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->