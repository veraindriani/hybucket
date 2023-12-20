<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Contoh */

$this->title = 'Update Contoh: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contohs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contoh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
