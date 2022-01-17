<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kunjungan */

$this->title = 'Update Kunjungan: ' . $model->id_kunjungan;
$this->params['breadcrumbs'][] = ['label' => 'Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_kunjungan, 'url' => ['view', 'id_kunjungan' => $model->id_kunjungan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kunjungan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
