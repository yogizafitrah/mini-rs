<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DokterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Dokter';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dokter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dokter',
            'no_dokter',
            'nama_dokter',
            'jk_dokter',
            'tanggal_lahir',
            //'tempat_lahir',
            //'status_dokter',
            //'agama_dokter',
            //'pendidikan_dokter',
            //'alamat_dokter',
            //'nohp_dokter',
            //'jenis_dokter',
            //'jenis_spesialis',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Dokter $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_dokter' => $model->id_dokter]);
                 }
            ],
        ],
    ]); ?>


</div>
