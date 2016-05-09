<?php
/* @var $this ImagenesController */
/* @var $data Imagenes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_origen')); ?>:</b>
	<?php echo CHtml::encode($data->id_origen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tipo_imagen_fk')); ?>:</b>
	<?php echo CHtml::encode($data->id_tipo_imagen_fk); ?>
	<br />


</div>