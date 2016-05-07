<?php
/* @var $this SuscripcionController */
/* @var $model Suscripcion */

$this->breadcrumbs=array(
	'Suscripcions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Suscripcion', 'url'=>array('index')),
	array('label'=>'Manage Suscripcion', 'url'=>array('admin')),
);
?>

<h1>Create Suscripcion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>