<?php
/* @var $this TipoCategoriaController */
/* @var $model TipoCategoria */

$this->breadcrumbs=array(
	'Tipo Categorias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoCategoria', 'url'=>array('index')),
	array('label'=>'Create TipoCategoria', 'url'=>array('create')),
	array('label'=>'View TipoCategoria', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipoCategoria', 'url'=>array('admin')),
);
?>

<h1>Update TipoCategoria <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>