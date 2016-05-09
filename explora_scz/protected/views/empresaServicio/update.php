<?php
/* @var $this EmpresaServicioController */
/* @var $model EmpresaServicio */

$this->breadcrumbs=array(
	'Empresa Servicios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmpresaServicio', 'url'=>array('index')),
	array('label'=>'Create EmpresaServicio', 'url'=>array('create')),
	array('label'=>'View EmpresaServicio', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmpresaServicio', 'url'=>array('admin')),
);
?>

<h1>Update EmpresaServicio <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>