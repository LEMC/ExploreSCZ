<?php
/* @var $this DescripcionController */
/* @var $data Descripcion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugar_partida')); ?>:</b>
	<?php echo CHtml::encode($data->lugar_partida); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_partida')); ?>:</b>
	<?php echo CHtml::encode($data->hora_partida); ?>
	<br />


</div>