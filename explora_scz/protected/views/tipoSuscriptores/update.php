<?php
/* @var $this TipoSuscriptoresController */
/* @var $model TipoSuscriptores */

$this->breadcrumbs=array(
	'Tipo Suscriptores'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoSuscriptores', 'url'=>array('index')),
	array('label'=>'Create TipoSuscriptores', 'url'=>array('create')),
	array('label'=>'View TipoSuscriptores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoSuscriptores', 'url'=>array('admin')),
);
?>

<h1>Update TipoSuscriptores <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>