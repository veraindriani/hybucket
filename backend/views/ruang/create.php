<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Ruang */

$this->title = 'Create Ruang';
$this->params['breadcrumbs'][] = ['label' => 'Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
