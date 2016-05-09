<?php
/* @var $this AgenciaViajeController */
/* @var $model AgenciaViaje */

$this->breadcrumbs = array(
    'Eventos' => array('admin'),
    'Adicionar',
);

//$this->titulo = array('Adicionar Eventos');
?>

<h1>Adicionar Agencia de Viaje</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>