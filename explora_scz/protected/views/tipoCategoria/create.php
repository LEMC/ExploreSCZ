<?php
/* @var $this TipoCategoriaController */
/* @var $model TipoCategoria */

$this->breadcrumbs=array(
	'Tipo Categorias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoCategoria', 'url'=>array('index')),
	array('label'=>'Manage TipoCategoria', 'url'=>array('admin')),
);
?>

<h1>Create TipoCategoria</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>