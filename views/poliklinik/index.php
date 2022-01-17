<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PoliklinikSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Poliklinik';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poliklinik-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Poliklinik', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_poli',
            'nama_poli',
            'status_poli',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\Poliklinik $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_poli' => $model->id_poli]);
                 }
            ],
        ],
    ]); ?>


</div>
