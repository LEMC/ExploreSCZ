<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */

$this->breadcrumbs=array(
	'Lugar Turisticos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LugarTuristico', 'url'=>array('index')),
	array('label'=>'Create LugarTuristico', 'url'=>array('create')),
	array('label'=>'Update LugarTuristico', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LugarTuristico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LugarTuristico', 'url'=>array('admin')),
);
?>

<h1>View LugarTuristico #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'descripcion',
		'direccion',
		'ubicacion',
		'valoracion',
		'id_descripcion_partida',
		'id_tipo_categoria_fk',
	),
)); ?>
