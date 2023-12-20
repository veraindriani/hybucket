<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use backend\models\tentang;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TentangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tentangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tentang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tentang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'kode',
            'isi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tentang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'kode' => $model->kode]);
                 }
            ],
        ],
    ]); ?>


</div>
