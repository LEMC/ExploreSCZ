<?php
/* @var $this EmpresaServicioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Empresa Servicios',
);

$this->menu=array(
	array('label'=>'Create EmpresaServicio', 'url'=>array('create')),
	array('label'=>'Manage EmpresaServicio', 'url'=>array('admin')),
);
?>

<h1>Empresa Servicios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
