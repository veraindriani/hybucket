<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestySnack */

$this->title = 'Create Testy Snack';
$this->params['breadcrumbs'][] = ['label' => 'Testy Snacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testy-snack-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
