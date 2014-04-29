<?php
/* @var $this UsersModelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users Models',
);

$this->menu=array(
	array('label'=>'Create UsersModel', 'url'=>array('create')),
	array('label'=>'Manage UsersModel', 'url'=>array('admin')),
);
?>

<h1>Users Models</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
