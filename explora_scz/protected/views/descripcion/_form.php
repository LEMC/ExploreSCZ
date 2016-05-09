<?php
/* @var $this DescripcionController */
/* @var $model Descripcion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'descripcion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar_partida'); ?>
		<?php echo $form->textField($model,'lugar_partida',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'lugar_partida'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_partida'); ?>
		<?php echo $form->textField($model,'hora_partida'); ?>
		<?php echo $form->error($model,'hora_partida'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->