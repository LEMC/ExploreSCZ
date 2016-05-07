<?php
/* @var $this AgenciaViajeController */
/* @var $model AgenciaViaje */

$this->breadcrumbs=array(
	'Agencia Viajes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AgenciaViaje', 'url'=>array('index')),
	array('label'=>'Manage AgenciaViaje', 'url'=>array('admin')),
);
?>

<h1>Create AgenciaViaje</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>