<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestySnack */

$this->title = 'Update Testy Snack: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Testy Snacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testy-snack-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
