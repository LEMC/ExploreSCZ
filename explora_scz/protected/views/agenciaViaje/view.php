<?php
/* @var $this AgenciaViajeController */
/* @var $model AgenciaViaje */

$this->breadcrumbs=array(
	'Agencia Viajes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AgenciaViaje', 'url'=>array('index')),
	array('label'=>'Create AgenciaViaje', 'url'=>array('create')),
	array('label'=>'Update AgenciaViaje', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AgenciaViaje', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AgenciaViaje', 'url'=>array('admin')),
);
?>

<h1>View AgenciaViaje #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'direccion',
		'ubicacion',
		'valoracion',
		'id_eventos_fk',
	),
)); ?>
