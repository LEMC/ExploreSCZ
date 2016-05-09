<?php
/* @var $this AgenciaViajeController */
/* @var $data AgenciaViaje */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ubicacion')); ?>:</b>
	<?php echo CHtml::encode($data->ubicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valoracion')); ?>:</b>
	<?php echo CHtml::encode($data->valoracion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_eventos_fk')); ?>:</b>
	<?php echo CHtml::encode($data->id_eventos_fk); ?>
	<br />


</div>