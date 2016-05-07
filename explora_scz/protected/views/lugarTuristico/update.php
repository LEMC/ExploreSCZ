<?php
/* @var $this LugarTuristicoController */
/* @var $model LugarTuristico */

$this->breadcrumbs=array(
	'Lugar Turisticos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LugarTuristico', 'url'=>array('index')),
	array('label'=>'Create LugarTuristico', 'url'=>array('create')),
	array('label'=>'View LugarTuristico', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LugarTuristico', 'url'=>array('admin')),
);
?>

<h1>Update LugarTuristico <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>