<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Tower */

$this->title = 'Create Tower';
$this->params['breadcrumbs'][] = ['label' => 'Towers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tower-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
