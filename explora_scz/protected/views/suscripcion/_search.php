<?php
/* @var $this SuscripcionController */
/* @var $model Suscripcion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_inicio'); ?>
		<?php echo $form->textField($model,'fecha_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_fin'); ?>
		<?php echo $form->textField($model,'fecha_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_plan_fk'); ?>
		<?php echo $form->textField($model,'id_plan_fk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_suscriptor'); ?>
		<?php echo $form->textField($model,'id_suscriptor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_tipo_suscriptor_fk'); ?>
		<?php echo $form->textField($model,'id_tipo_suscriptor_fk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->