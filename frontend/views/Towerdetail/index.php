<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TowerdetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Towerdetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="towerdetail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Towerdetail', ['create'], ['class' => 'btn btn-success']) ?>
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

            //'id',
            'TowerID',
            //'tower_id',
            //'SiteCode',
            //'TowerName',
            // 'Latitude',
            // 'Longitude',
             'SubDistrict',
             'District',
             'Province',
             'Region',
            // 'TowerType',
            // 'TowerHeight',
            // 'AreaType',
            // 'LandOwner',
            // 'Project',
            // 'TowerOwner',
            // 'SubTowerOwner',
            // 'Placement',
            // 'Current',
            // 'Remain',
            // 'Over',
            // 'TowerStatus',
            // 'ServiceType',
            // 'Remark',
            // 'UserName',
            // 'TimeRecord',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
