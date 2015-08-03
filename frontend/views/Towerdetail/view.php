<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Towerdetail */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Towerdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="towerdetail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'TowerID',
            'tower_id',
            'SiteCode',
            'TowerName',
            'Latitude',
            'Longitude',
            'SubDistrict',
            'District',
            'Province',
            'Region',
            'TowerType',
            'TowerHeight',
            'AreaType',
            'LandOwner',
            'Project',
            'TowerOwner',
            'SubTowerOwner',
            'Placement',
            'Current',
            'Remain',
            'Over',
            'TowerStatus',
            'ServiceType',
            'Remark',
            'UserName',
            'TimeRecord',
        ],
    ]) ?>

</div>
