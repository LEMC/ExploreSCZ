<?php
/* @var $this DescripcionController */
/* @var $model Descripcion */

$this->breadcrumbs=array(
	'Descripcions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Descripcion', 'url'=>array('index')),
	array('label'=>'Create Descripcion', 'url'=>array('create')),
	array('label'=>'View Descripcion', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Descripcion', 'url'=>array('admin')),
);
?>

<h1>Update Descripcion <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>