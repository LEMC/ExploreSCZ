<?php
/* @var $this TipoContactoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Contactos',
);

$this->menu=array(
	array('label'=>'Create TipoContacto', 'url'=>array('create')),
	array('label'=>'Manage TipoContacto', 'url'=>array('admin')),
);
?>

<h1>Tipo Contactos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
