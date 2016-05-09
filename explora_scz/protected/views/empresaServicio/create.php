<?php
/* @var $this EmpresaServicioController */
/* @var $model EmpresaServicio */

$this->breadcrumbs = array(
    'Eventos' => array('admin'),
    'Adicionar',
);

//$this->titulo = array('Adicionar Eventos');
?>

<h1>Adicionar Empresa de Servicio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>