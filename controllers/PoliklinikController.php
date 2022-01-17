<?php

namespace app\controllers;

use app\models\Poliklinik;
use app\models\PoliklinikSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PoliklinikController implements the CRUD actions for Poliklinik model.
 */
class PoliklinikController extends Controller
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
     * Lists all Poliklinik models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PoliklinikSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Poliklinik model.
     * @param int $id_poli Id Poli
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_poli)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_poli),
        ]);
    }

    /**
     * Creates a new Poliklinik model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Poliklinik();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_poli' => $model->id_poli]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Poliklinik model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_poli Id Poli
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_poli)
    {
        $model = $this->findModel($id_poli);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_poli' => $model->id_poli]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Poliklinik model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_poli Id Poli
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_poli)
    {
        $this->findModel($id_poli)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Poliklinik model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_poli Id Poli
     * @return Poliklinik the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_poli)
    {
        if (($model = Poliklinik::findOne(['id_poli' => $id_poli])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
