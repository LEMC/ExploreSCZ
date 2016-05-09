<?php
/* @var $this TipoImagenController */
/* @var $model TipoImagen */

$this->breadcrumbs=array(
	'Tipo Imagens'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoImagen', 'url'=>array('index')),
	array('label'=>'Create TipoImagen', 'url'=>array('create')),
	array('label'=>'View TipoImagen', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoImagen', 'url'=>array('admin')),
);
?>

<h1>Update TipoImagen <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>