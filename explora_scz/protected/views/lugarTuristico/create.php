<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */

<<<<<<< HEAD
$this->breadcrumbs = array(
    'Eventos' => array('admin'),
    'Adicionar',
);

//$this->titulo = array('Adicionar Eventos');
?>

<h1>Adicionar Lugar Turistico</h1>
=======
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
>>>>>>> 1e9226f23cb3a091efe2009a2317d5359519a883

<?php $this->renderPartial('_form', array('model'=>$model)); ?>