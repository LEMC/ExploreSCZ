<?php
/* @var $this EmpresaServicioController */
/* @var $model EmpresaServicio */

$this->breadcrumbs=array(
	'Empresa Servicios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmpresaServicio', 'url'=>array('index')),
	array('label'=>'Manage EmpresaServicio', 'url'=>array('admin')),
);
?>

<h1>Create EmpresaServicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>