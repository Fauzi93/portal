<?php
/* @var $this Dashboard_beritaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Beritas',
);

$this->menu=array(
	array('label'=>'Create Berita', 'url'=>array('create')),
	array('label'=>'Manage Berita', 'url'=>array('admin')),
);
?>

<h1>Beritas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
