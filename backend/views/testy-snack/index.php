<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\TestySnack;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TestySnackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testy Snacks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testy-snack-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Testy Snack', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'nama',
            'desc',
            'img',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TestySnack $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>
