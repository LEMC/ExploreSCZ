<?php
/* @var $this TipoContactoController */
/* @var $model TipoContacto */

$this->breadcrumbs=array(
	'Tipo Contactos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoContacto', 'url'=>array('index')),
	array('label'=>'Manage TipoContacto', 'url'=>array('admin')),
);
?>

<h1>Create TipoContacto</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>