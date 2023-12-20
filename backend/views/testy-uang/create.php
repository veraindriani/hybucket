<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TestyUang */

$this->title = 'Create Testy Uang';
$this->params['breadcrumbs'][] = ['label' => 'Testy Uangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testy-uang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
