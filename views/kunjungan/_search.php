<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KunjunganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kunjungan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_kunjungan') ?>

    <?= $form->field($model, 'no_regis') ?>

    <?= $form->field($model, 'pasien_kunjungan') ?>

    <?= $form->field($model, 'dokter_kunjungan') ?>

    <?= $form->field($model, 'poli_kunjungan') ?>

    <?php // echo $form->field($model, 'carabayar') ?>

    <?php // echo $form->field($model, 'status_kunjungan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
