<?php

namespace backend\controllers;

use Yii;
use backend\models\TestyUang;
use backend\models\TestyUangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TestyUangController implements the CRUD actions for TestyUang model.
 */
class TestyUangController extends Controller
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
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TestyUang models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TestyUangSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TestyUang model.
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
     * Creates a new TestyUang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TestyUang();

        if ($model->load(\Yii::$app->request->post())) {
            $model->image = \yii\web\UploadedFile::getInstance($model, 'image');
            if ($model->validate()) {
                $saveTo = 'uploads_image/' . $model->image->baseName . '.' . $model->image->extension;
                if ($model->image->saveAs($saveTo)) {
                    $model->img = $model->image->baseName . '.' . $model->image->extension;
                    $model->save(false);
                    Yii::$app->session->setFlash('success', 'Foto berhasil diupload');

                    return $this->redirect(['view', 'kode' => $model->kode]);
                }
            }
        }
        return $this->render('create', ['model' => $model]);
    }

    /**
     * Updates an existing TestyUang model.
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
     * Deletes an existing TestyUang model.
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
     * Finds the TestyUang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $kode Kode
     * @return TestyUang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode)
    {
        if (($model = TestyUang::findOne(['kode' => $kode])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
