<?php
/* @var $this ComentarController */
/* @var $model Comentar */

$this->breadcrumbs=array(
	'Comentars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Comentar', 'url'=>array('index')),
	array('label'=>'Create Comentar', 'url'=>array('create')),
	array('label'=>'Update Comentar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Comentar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comentar', 'url'=>array('admin')),
);
?>

<h1>View Comentar #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'nombre',
		'comentario',
		'id_lugar_turistico_fk',
	),
)); ?>
