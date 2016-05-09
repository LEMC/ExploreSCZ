<?php
/* @var $this ContactoController */
/* @var $data Contacto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_contacto')); ?>:</b>
	<?php echo CHtml::encode($data->id_contacto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_contacto_fk')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_contacto_fk); ?>
	<br />


</div>