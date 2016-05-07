<?php
/* @var $this TipoImagenController */
/* @var $model TipoImagen */

$this->breadcrumbs=array(
	'Tipo Imagens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoImagen', 'url'=>array('index')),
	array('label'=>'Manage TipoImagen', 'url'=>array('admin')),
);
?>

<h1>Create TipoImagen</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>