<?php

namespace backend\controllers;

use Yii;
use backend\models\TestyBunga;
use backend\models\TestyBungaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TestyBungaController implements the CRUD actions for TestyBunga model.
 */
class TestyBungaController extends Controller
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
     * Lists all TestyBunga models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TestyBungaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TestyBunga model.
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
     * Creates a new TestyBunga model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TestyBunga();

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
     * Updates an existing TestyBunga model.
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
     * Deletes an existing TestyBunga model.
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
     * Finds the TestyBunga model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $kode Kode
     * @return TestyBunga the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($kode)
    {
        if (($model = TestyBunga::findOne(['kode' => $kode])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
