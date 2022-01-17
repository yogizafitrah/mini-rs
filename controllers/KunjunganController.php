<?php

namespace app\controllers;

use app\models\Kunjungan;
use app\models\KunjunganSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KunjunganController implements the CRUD actions for Kunjungan model.
 */
class KunjunganController extends Controller
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
     * Lists all Kunjungan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KunjunganSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kunjungan model.
     * @param int $id_kunjungan Id Kunjungan
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_kunjungan)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_kunjungan),
        ]);
    }

    /**
     * Creates a new Kunjungan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kunjungan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_kunjungan' => $model->id_kunjungan]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kunjungan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_kunjungan Id Kunjungan
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_kunjungan)
    {
        $model = $this->findModel($id_kunjungan);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_kunjungan' => $model->id_kunjungan]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kunjungan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_kunjungan Id Kunjungan
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_kunjungan)
    {
        $this->findModel($id_kunjungan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kunjungan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_kunjungan Id Kunjungan
     * @return Kunjungan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_kunjungan)
    {
        if (($model = Kunjungan::findOne(['id_kunjungan' => $id_kunjungan])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
