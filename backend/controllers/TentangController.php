<?php

namespace backend\controllers;

use backend\models\Tentang;
use backend\models\TentangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TentangController implements the CRUD actions for Tentang model.
 */
class TentangController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Tentang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TentangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tentang model.
     * @param int $kode Kode
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($kode)
    {
        return $this->render('view', [
            'model' => $this->findModel($kode),
        ]);
    }

    /**
     * Creates a new Tentang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tentang();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'kode' => $model->kode]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tentang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $kode Kode
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($kode)
    {
        $model = $this->findModel($kode);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'kode' => $model->kode]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tentang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $kode Kode
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($kode)
    {
        $this->findModel($kode)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tentang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $kode Kode
     * @return Tentang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode)
    {
        if (($model = Tentang::findOne(['kode' => $kode])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
