<?php
/* @var $this DescripcionController */
/* @var $model Descripcion */

$this->breadcrumbs=array(
	'Descripcions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Descripcion', 'url'=>array('index')),
	array('label'=>'Create Descripcion', 'url'=>array('create')),
	array('label'=>'Update Descripcion', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Descripcion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Descripcion', 'url'=>array('admin')),
);
?>

<h1>View Descripcion #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lugar_partida',
		'hora_partida',
	),
)); ?>
