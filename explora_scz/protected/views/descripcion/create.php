<?php
/* @var $this DescripcionController */
/* @var $model Descripcion */

$this->breadcrumbs=array(
	'Descripcions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Descripcion', 'url'=>array('index')),
	array('label'=>'Manage Descripcion', 'url'=>array('admin')),
);
?>

<h1>Create Descripcion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>