<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\TestyBunga;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TestyBungaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testy Bungas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testy-bunga-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Testy Bunga', ['create'], ['class' => 'btn btn-success']) ?>
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
                'urlCreator' => function ($action, TestyBunga $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>
