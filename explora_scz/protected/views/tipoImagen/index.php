<?php
/* @var $this TipoImagenController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Imagens',
);

$this->menu=array(
	array('label'=>'Create TipoImagen', 'url'=>array('create')),
	array('label'=>'Manage TipoImagen', 'url'=>array('admin')),
);
?>

<h1>Tipo Imagens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
