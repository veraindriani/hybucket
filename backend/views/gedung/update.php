<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Gedung */

$this->title = 'Update Gedung: ' . $model->kode;
$this->params['breadcrumbs'][] = ['label' => 'Gedungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kode, 'url' => ['view', 'kode' => $model->kode]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gedung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
