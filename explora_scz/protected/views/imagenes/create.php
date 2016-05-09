<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */
<<<<<<< HEAD
$this->breadcrumbs = array(
    'Eventos' => array('admin'),
    'Adicionar',
);

//$this->titulo = array('Adicionar Eventos');
?>

<h1>Adicionar Imagenes</h1>
=======

$this->breadcrumbs=array(
	'Imagenes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Imagenes', 'url'=>array('index')),
	array('label'=>'Manage Imagenes', 'url'=>array('admin')),
);
?>

<h1>Create Imagenes</h1>
>>>>>>> 1e9226f23cb3a091efe2009a2317d5359519a883

<?php $this->renderPartial('_form', array('model'=>$model)); ?>