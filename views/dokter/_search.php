<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DokterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dokter-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_dokter') ?>

    <?= $form->field($model, 'no_dokter') ?>

    <?= $form->field($model, 'nama_dokter') ?>

    <?= $form->field($model, 'jk_dokter') ?>

    <?= $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'status_dokter') ?>

    <?php // echo $form->field($model, 'agama_dokter') ?>

    <?php // echo $form->field($model, 'pendidikan_dokter') ?>

    <?php // echo $form->field($model, 'alamat_dokter') ?>

    <?php // echo $form->field($model, 'nohp_dokter') ?>

    <?php // echo $form->field($model, 'jenis_dokter') ?>

    <?php // echo $form->field($model, 'jenis_spesialis') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
