<?php
/* @var $this TipoImagenController */
/* @var $model TipoImagen */

$this->breadcrumbs=array(
	'Tipo Imagens'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoImagen', 'url'=>array('index')),
	array('label'=>'Create TipoImagen', 'url'=>array('create')),
	array('label'=>'Update TipoImagen', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoImagen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoImagen', 'url'=>array('admin')),
);
?>

<h1>View TipoImagen #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
	),
)); ?>
