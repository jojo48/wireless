<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TowerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Towers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tower-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tower', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

         //   'id',
            'towerID',
            'towerName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
