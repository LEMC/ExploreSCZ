<?php
/* @var $this TipoSuscriptoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Suscriptores',
);

$this->menu=array(
	array('label'=>'Create TipoSuscriptores', 'url'=>array('create')),
	array('label'=>'Manage TipoSuscriptores', 'url'=>array('admin')),
);
?>

<h1>Tipo Suscriptores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
