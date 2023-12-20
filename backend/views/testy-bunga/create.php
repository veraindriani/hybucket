<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestyBunga */

$this->title = 'Create Testy Bunga';
$this->params['breadcrumbs'][] = ['label' => 'Testy Bungas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testy-bunga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
