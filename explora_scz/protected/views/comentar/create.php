<?php
/* @var $this ComentarController */
/* @var $model Comentar */

$this->breadcrumbs=array(
	'Comentars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Comentar', 'url'=>array('index')),
	array('label'=>'Manage Comentar', 'url'=>array('admin')),
);
?>

<h1>Create Comentar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>