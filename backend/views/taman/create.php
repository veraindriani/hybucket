<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Taman */

$this->title = 'Create Taman';
$this->params['breadcrumbs'][] = ['label' => 'Tamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
