<?php
/* @var $this EmpresaServicioController */
/* @var $model EmpresaServicio */

$this->breadcrumbs=array(
	'Empresa Servicios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmpresaServicio', 'url'=>array('index')),
	array('label'=>'Create EmpresaServicio', 'url'=>array('create')),
	array('label'=>'Update EmpresaServicio', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmpresaServicio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmpresaServicio', 'url'=>array('admin')),
);
?>

<h1>View EmpresaServicio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'direccion',
		'ubicacion',
		'email',
		'id_rubro_fk',
	),
)); ?>
