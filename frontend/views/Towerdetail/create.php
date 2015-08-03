<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Towerdetail */

$this->title = 'Create Towerdetail';
$this->params['breadcrumbs'][] = ['label' => 'Towerdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="towerdetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
