<?php
/* @var $this AgenciaViajeController */
/* @var $model AgenciaViaje */

$this->breadcrumbs=array(
	'Agencia Viajes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AgenciaViaje', 'url'=>array('index')),
	array('label'=>'Create AgenciaViaje', 'url'=>array('create')),
	array('label'=>'View AgenciaViaje', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AgenciaViaje', 'url'=>array('admin')),
);
?>

<h1>Update AgenciaViaje <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>