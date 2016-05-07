<?php
/* @var $this TipoCategoriaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Categorias',
);

$this->menu=array(
	array('label'=>'Create TipoCategoria', 'url'=>array('create')),
	array('label'=>'Manage TipoCategoria', 'url'=>array('admin')),
);
?>

<h1>Tipo Categorias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
