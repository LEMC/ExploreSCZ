<?php
/* @var $this SuscripcionController */
/* @var $model Suscripcion */

$this->breadcrumbs=array(
	'Suscripcions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Suscripcion', 'url'=>array('index')),
	array('label'=>'Create Suscripcion', 'url'=>array('create')),
	array('label'=>'Update Suscripcion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Suscripcion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Suscripcion', 'url'=>array('admin')),
);
?>

<h1>View Suscripcion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha_inicio',
		'fecha_fin',
		'id_plan_fk',
		'id_suscriptor',
		'id_tipo_suscriptor_fk',
	),
)); ?>
