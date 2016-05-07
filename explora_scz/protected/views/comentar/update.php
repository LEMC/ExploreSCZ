<?php
/* @var $this ComentarController */
/* @var $model Comentar */

$this->breadcrumbs=array(
	'Comentars'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comentar', 'url'=>array('index')),
	array('label'=>'Create Comentar', 'url'=>array('create')),
	array('label'=>'View Comentar', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Comentar', 'url'=>array('admin')),
);
?>

<h1>Update Comentar <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>