<?php
/* @var $this RubroController */
/* @var $model Rubro */

$this->breadcrumbs=array(
	'Rubros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rubro', 'url'=>array('index')),
	array('label'=>'Manage Rubro', 'url'=>array('admin')),
);
?>

<h1>Create Rubro</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>