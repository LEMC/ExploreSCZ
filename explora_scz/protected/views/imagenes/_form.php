<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagenes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_origen'); ?>
		<?php echo $form->textField($model,'id_origen'); ?>
		<?php echo $form->error($model,'id_origen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tipo_imagen_fk'); ?>
		<?php echo $form->textField($model,'id_tipo_imagen_fk'); ?>
		<?php echo $form->error($model,'id_tipo_imagen_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->