<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lugar-turistico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion'); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ubicacion'); ?>
		<?php echo $form->textField($model,'ubicacion'); ?>
		<?php echo $form->error($model,'ubicacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valoracion'); ?>
		<?php echo $form->textField($model,'valoracion',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'valoracion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_descripcion_partida'); ?>
		<?php echo $form->textField($model,'id_descripcion_partida'); ?>
		<?php echo $form->error($model,'id_descripcion_partida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_categoria_fk'); ?>
		<?php echo $form->textField($model,'id_tipo_categoria_fk'); ?>
		<?php echo $form->error($model,'id_tipo_categoria_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->