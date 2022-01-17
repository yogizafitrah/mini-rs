<?php

namespace app\controllers;

use app\models\Jadwal;
use app\models\JadwalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JadwalController implements the CRUD actions for Jadwal model.
 */
class JadwalController extends Controller
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
     * Lists all Jadwal models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JadwalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jadwal model.
     * @param int $id_jadwal Id Jadwal
     * @param int $id_dokter Id Dokter
     * @param int $id_poliklinik Id Poliklinik
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_jadwal, $id_dokter, $id_poliklinik)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_jadwal, $id_dokter, $id_poliklinik),
        ]);
    }

    /**
     * Creates a new Jadwal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Jadwal();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_jadwal' => $model->id_jadwal, 'id_dokter' => $model->id_dokter, 'id_poliklinik' => $model->id_poliklinik]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jadwal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_jadwal Id Jadwal
     * @param int $id_dokter Id Dokter
     * @param int $id_poliklinik Id Poliklinik
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_jadwal, $id_dokter, $id_poliklinik)
    {
        $model = $this->findModel($id_jadwal, $id_dokter, $id_poliklinik);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_jadwal' => $model->id_jadwal, 'id_dokter' => $model->id_dokter, 'id_poliklinik' => $model->id_poliklinik]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jadwal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_jadwal Id Jadwal
     * @param int $id_dokter Id Dokter
     * @param int $id_poliklinik Id Poliklinik
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_jadwal, $id_dokter, $id_poliklinik)
    {
        $this->findModel($id_jadwal, $id_dokter, $id_poliklinik)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jadwal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_jadwal Id Jadwal
     * @param int $id_dokter Id Dokter
     * @param int $id_poliklinik Id Poliklinik
     * @return Jadwal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_jadwal, $id_dokter, $id_poliklinik)
    {
        if (($model = Jadwal::findOne(['id_jadwal' => $id_jadwal, 'id_dokter' => $id_dokter, 'id_poliklinik' => $id_poliklinik])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
