<?php
/* @var $this UsersModelController */
/* @var $model UsersModel */

$this->breadcrumbs=array(
	'Users Models'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UsersModel', 'url'=>array('index')),
	array('label'=>'Manage UsersModel', 'url'=>array('admin')),
);
?>

<h1>Create UsersModel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>