<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwal */

$this->title = $model->id_jadwal;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jadwal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_jadwal' => $model->id_jadwal, 'id_dokter' => $model->id_dokter, 'id_poliklinik' => $model->id_poliklinik], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_jadwal' => $model->id_jadwal, 'id_dokter' => $model->id_dokter, 'id_poliklinik' => $model->id_poliklinik], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_jadwal',
            'hari',
            'jam_mulai',
            'jam_selesai',
            'id_dokter',
            'id_poliklinik',
            'status_jadwal',
        ],
    ]) ?>

</div>
