<?php
/* @var $this SuscripcionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Suscripcions',
);

$this->menu=array(
	array('label'=>'Create Suscripcion', 'url'=>array('create')),
	array('label'=>'Manage Suscripcion', 'url'=>array('admin')),
);
?>

<h1>Suscripcions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
