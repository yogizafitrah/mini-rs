<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwal */

$this->title = 'Update Jadwal: ' . $model->id_jadwal;
$this->params['breadcrumbs'][] = ['label' => 'Jadwal', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jadwal, 'url' => ['view', 'id_jadwal' => $model->id_jadwal, 'id_dokter' => $model->id_dokter, 'id_poliklinik' => $model->id_poliklinik]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jadwal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
