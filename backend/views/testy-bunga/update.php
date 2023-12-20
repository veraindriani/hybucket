<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestyBunga */

$this->title = 'Update Testy Bunga: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Testy Bungas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testy-bunga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
