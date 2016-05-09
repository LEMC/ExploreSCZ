<?php
/* @var $this EventosController */
/* @var $model Eventos */

<<<<<<< HEAD
//$this->menu = array(
//    array('label' => 'Listar Eventos', 'url' => array('admin')),
////    array('label' => 'Manage RecordatorioC', 'url' => array('admin')),
//);
$this->breadcrumbs = array(
    'Eventos' => array('admin'),
    'Adicionar',
);

//$this->titulo = array('Adicionar Eventos');
?>

<h1>Adicionar Eventos</h1>
=======
$this->breadcrumbs=array(
	'Eventoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index')),
	array('label'=>'Manage Eventos', 'url'=>array('admin')),
);
?>

<h1>Create Eventos</h1>
>>>>>>> 1e9226f23cb3a091efe2009a2317d5359519a883

<?php $this->renderPartial('_form', array('model'=>$model)); ?>