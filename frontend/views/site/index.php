<?php
use \yii\helpers\Html;
/* @var $this yii\web\View */
$this->title = ' :: H O M E ::';

//	yii::$app->db->open();		//TEST Connect to DATABASE
?>
<br><br><br>
<?php
	$route1 = Yii::$app->urlManager->createUrl('test/test1');
?>
<a href="<?=$route1?>" class="btn btn-danger">Go to Action Test1</a><br>

<?php
$route2 = Yii::$app->urlManager->createUrl(['test/test2','name'=>'Yont','lname'=>'Min']);
?>
<a href="<?=$route2?>" class="btn btn-warning">Go to Action Test2</a><br>



<?//=\yii\helpers\Html::a('Link III',['test/test1']);?>
<?//=\yii\helpers\Html::a('Link III',['test/test1','a'=>'1']);?>
<?=Html::a('Link III',['test/test1']);?>