<?php
/* @var $this LugarTuristicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lugar Turisticos',
);

$this->menu=array(
	array('label'=>'Create LugarTuristico', 'url'=>array('create')),
	array('label'=>'Manage LugarTuristico', 'url'=>array('admin')),
);
?>

<h1>Lugar Turisticos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
