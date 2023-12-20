<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\Taman;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tamen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taman-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Taman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'nama',
            'des',
            'img',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Taman $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>
