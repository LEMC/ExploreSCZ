<?php
/* @var $this EmpresaServicioController */
/* @var $model EmpresaServicio */

<<<<<<< HEAD
$this->breadcrumbs = array(
    'Eventos' => array('admin'),
    'Adicionar',
);

//$this->titulo = array('Adicionar Eventos');
?>

<h1>Adicionar Empresa de Servicio</h1>
=======
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
>>>>>>> 1e9226f23cb3a091efe2009a2317d5359519a883

<?php $this->renderPartial('_form', array('model'=>$model)); ?>