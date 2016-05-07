<?php
/* @var $this SuscripcionController */
/* @var $data Suscripcion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_plan_fk')); ?>:</b>
	<?php echo CHtml::encode($data->id_plan_fk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_suscriptor')); ?>:</b>
	<?php echo CHtml::encode($data->id_suscriptor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_suscriptor_fk')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_suscriptor_fk); ?>
	<br />


</div>