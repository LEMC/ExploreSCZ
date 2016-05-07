<?php
/* @var $this AgenciaViajeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agencia Viajes',
);

$this->menu=array(
	array('label'=>'Create AgenciaViaje', 'url'=>array('create')),
	array('label'=>'Manage AgenciaViaje', 'url'=>array('admin')),
);
?>

<h1>Agencia Viajes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
