<?php
/* @var $this TipoCategoriaController */
/* @var $data TipoCategoria */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_categoria_fk')); ?>:</b>
	<?php echo CHtml::encode($data->id_categoria_fk); ?>
	<br />


</div>