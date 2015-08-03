<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TowerdetailSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="towerdetail-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'TowerID') ?>

    <?= $form->field($model, 'tower_id') ?>

    <?= $form->field($model, 'SiteCode') ?>

    <?= $form->field($model, 'TowerName') ?>

    <?php // echo $form->field($model, 'Latitude') ?>

    <?php // echo $form->field($model, 'Longitude') ?>

    <?php // echo $form->field($model, 'SubDistrict') ?>

    <?php // echo $form->field($model, 'District') ?>

    <?php // echo $form->field($model, 'Province') ?>

    <?php // echo $form->field($model, 'Region') ?>

    <?php // echo $form->field($model, 'TowerType') ?>

    <?php // echo $form->field($model, 'TowerHeight') ?>

    <?php // echo $form->field($model, 'AreaType') ?>

    <?php // echo $form->field($model, 'LandOwner') ?>

    <?php // echo $form->field($model, 'Project') ?>

    <?php // echo $form->field($model, 'TowerOwner') ?>

    <?php // echo $form->field($model, 'SubTowerOwner') ?>

    <?php // echo $form->field($model, 'Placement') ?>

    <?php // echo $form->field($model, 'Current') ?>

    <?php // echo $form->field($model, 'Remain') ?>

    <?php // echo $form->field($model, 'Over') ?>

    <?php // echo $form->field($model, 'TowerStatus') ?>

    <?php // echo $form->field($model, 'ServiceType') ?>

    <?php // echo $form->field($model, 'Remark') ?>

    <?php // echo $form->field($model, 'UserName') ?>

    <?php // echo $form->field($model, 'TimeRecord') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
