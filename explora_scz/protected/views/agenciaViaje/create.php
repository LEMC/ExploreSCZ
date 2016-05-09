<?php
/* @var $this AgenciaViajeController */
/* @var $model AgenciaViaje */

<<<<<<< HEAD
$this->breadcrumbs = array(
    'Eventos' => array('admin'),
    'Adicionar',
);

//$this->titulo = array('Adicionar Eventos');
?>

<h1>Adicionar Agencia de Viaje</h1>
=======
$this->breadcrumbs=array(
	'Agencia Viajes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AgenciaViaje', 'url'=>array('index')),
	array('label'=>'Manage AgenciaViaje', 'url'=>array('admin')),
);
?>

<h1>Create AgenciaViaje</h1>

>>>>>>> 1e9226f23cb3a091efe2009a2317d5359519a883
<?php $this->renderPartial('_form', array('model'=>$model)); ?>