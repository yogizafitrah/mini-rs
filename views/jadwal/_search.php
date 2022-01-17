<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JadwalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_jadwal') ?>

    <?= $form->field($model, 'hari') ?>

    <?= $form->field($model, 'jam_mulai') ?>

    <?= $form->field($model, 'jam_selesai') ?>

    <?= $form->field($model, 'id_dokter') ?>

    <?php // echo $form->field($model, 'id_poliklinik') ?>

    <?php // echo $form->field($model, 'status_jadwal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
