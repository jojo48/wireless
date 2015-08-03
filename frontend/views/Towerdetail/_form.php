<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Towerdetail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="towerdetail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TowerID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tower_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SiteCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TowerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Latitude')->textInput() ?>

    <?= $form->field($model, 'Longitude')->textInput() ?>

    <?= $form->field($model, 'SubDistrict')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'District')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Province')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TowerType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TowerHeight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'AreaType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LandOwner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Project')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TowerOwner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SubTowerOwner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Placement')->textInput() ?>

    <?= $form->field($model, 'Current')->textInput() ?>

    <?= $form->field($model, 'Remain')->textInput() ?>

    <?= $form->field($model, 'Over')->textInput() ?>

    <?= $form->field($model, 'TowerStatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ServiceType')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UserName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TimeRecord')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
