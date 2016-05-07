<?php
/* @var $this TipoContactoController */
/* @var $model TipoContacto */

$this->breadcrumbs=array(
	'Tipo Contactos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoContacto', 'url'=>array('index')),
	array('label'=>'Create TipoContacto', 'url'=>array('create')),
	array('label'=>'View TipoContacto', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoContacto', 'url'=>array('admin')),
);
?>

<h1>Update TipoContacto <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>