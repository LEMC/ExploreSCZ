<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */
$this->breadcrumbs = array(
    'Eventos' => array('admin'),
    'Adicionar',
);

//$this->titulo = array('Adicionar Eventos');
?>

<h1>Adicionar Imagenes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>