<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\Jenis;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProdiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jenis', ['create'], ['class' => 'btn btn-success']) ?>
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Jenis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>
