<?php
/* @var $this TipoCategoriaController */
/* @var $model TipoCategoria */

$this->breadcrumbs=array(
	'Tipo Categorias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipoCategoria', 'url'=>array('index')),
	array('label'=>'Create TipoCategoria', 'url'=>array('create')),
	array('label'=>'Update TipoCategoria', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipoCategoria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoCategoria', 'url'=>array('admin')),
);
?>

<h1>View TipoCategoria #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'id_categoria_fk',
	),
)); ?>
