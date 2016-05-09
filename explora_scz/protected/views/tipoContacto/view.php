<?php
/* @var $this TipoContactoController */
/* @var $model TipoContacto */

$this->breadcrumbs=array(
	'Tipo Contactos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoContacto', 'url'=>array('index')),
	array('label'=>'Create TipoContacto', 'url'=>array('create')),
	array('label'=>'Update TipoContacto', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoContacto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoContacto', 'url'=>array('admin')),
);
?>

<h1>View TipoContacto #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
