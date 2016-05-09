<?php
/* @var $this EventosController */
/* @var $model Eventos */

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

<?php $this->renderPartial('_form', array('model'=>$model)); ?>