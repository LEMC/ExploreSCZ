<?php
/* @var $this DescripcionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Descripcions',
);

$this->menu=array(
	array('label'=>'Create Descripcion', 'url'=>array('create')),
	array('label'=>'Manage Descripcion', 'url'=>array('admin')),
);
?>

<h1>Descripcions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
