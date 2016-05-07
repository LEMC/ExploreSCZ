<?php
/* @var $this TipoSuscriptoresController */
/* @var $model TipoSuscriptores */

$this->breadcrumbs=array(
	'Tipo Suscriptores'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoSuscriptores', 'url'=>array('index')),
	array('label'=>'Create TipoSuscriptores', 'url'=>array('create')),
	array('label'=>'Update TipoSuscriptores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoSuscriptores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoSuscriptores', 'url'=>array('admin')),
);
?>

<h1>View TipoSuscriptores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre',
		'id',
	),
)); ?>
