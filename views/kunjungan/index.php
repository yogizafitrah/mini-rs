<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KunjunganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kunjungan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kunjungan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_kunjungan',
            'no_regis',
            'pasien_kunjungan',
            'dokter_kunjungan',
            'poli_kunjungan',
            //'carabayar',
            //'status_kunjungan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kunjungan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_kunjungan' => $model->id_kunjungan]);
                 }
            ],
        ],
    ]); ?>


</div>
