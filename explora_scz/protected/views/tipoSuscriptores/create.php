<?php
/* @var $this TipoSuscriptoresController */
/* @var $model TipoSuscriptores */

$this->breadcrumbs=array(
	'Tipo Suscriptores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoSuscriptores', 'url'=>array('index')),
	array('label'=>'Manage TipoSuscriptores', 'url'=>array('admin')),
);
?>

<h1>Create TipoSuscriptores</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>