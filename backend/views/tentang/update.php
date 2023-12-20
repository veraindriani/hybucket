<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tentang */

$this->title = 'Update Tentang: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Tentangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tentang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
