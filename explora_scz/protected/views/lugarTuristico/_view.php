<?php
/* @var $this LugarTuristicoController */
/* @var $data LugarTuristico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_descripcion_partida')); ?>:</b>
	<?php echo CHtml::encode($data->id_descripcion_partida); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_categoria_fk')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_categoria_fk); ?>
	<br />

	*/ ?>

</div>