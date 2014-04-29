<?php
/* @var $this UsersModelController */
/* @var $model UsersModel */

$this->breadcrumbs=array(
	'Users Models'=>array('index'),
	$model->idUsers=>array('view','id'=>$model->idUsers),
	'Update',
);

$this->menu=array(
	array('label'=>'List UsersModel', 'url'=>array('index')),
	array('label'=>'Create UsersModel', 'url'=>array('create')),
	array('label'=>'View UsersModel', 'url'=>array('view', 'id'=>$model->idUsers)),
	array('label'=>'Manage UsersModel', 'url'=>array('admin')),
);
?>

<h1>Update UsersModel <?php echo $model->idUsers; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>