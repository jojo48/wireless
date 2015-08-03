<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Hspa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="hspa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'siteCode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'siteName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
