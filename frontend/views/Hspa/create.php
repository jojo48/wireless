<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Hspa */

$this->title = 'Create Hspa';
$this->params['breadcrumbs'][] = ['label' => 'Hspas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hspa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
