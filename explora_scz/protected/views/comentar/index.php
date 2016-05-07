<?php
/* @var $this ComentarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Comentars',
);

$this->menu=array(
	array('label'=>'Create Comentar', 'url'=>array('create')),
	array('label'=>'Manage Comentar', 'url'=>array('admin')),
);
?>

<h1>Comentars</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
