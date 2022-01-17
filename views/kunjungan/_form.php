<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kunjungan */
/* @var $form yii\widgets\ActiveForm */
// echo $print;
?>

<div class="kunjungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_regis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pasien_kunjungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dokter_kunjungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'poli_kunjungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'carabayar')->dropDownList([ 'Umum' => 'Umum', 'BPJS' => 'BPJS', 'Asuransi' => 'Asuransi', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status_kunjungan')->dropDownList([ 'Aktif' => 'Aktif', 'Tutup Kunjungan' => 'Tutup Kunjungan', 'Batal' => 'Batal', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
