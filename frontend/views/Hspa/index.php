<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HspaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hspas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hspa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Hspa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
//  ****  add export file
        'panel'=>[
            'before'=>''
        ],   
//  *********************
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'siteCode',
            'siteName',
            'latitude',
            'longitude',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
