<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */

$this->breadcrumbs=array(
	'Lugar Turisticos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LugarTuristico', 'url'=>array('index')),
	array('label'=>'Manage LugarTuristico', 'url'=>array('admin')),
);
?>

<h1>Create LugarTuristico</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>