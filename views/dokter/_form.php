<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Dokter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dokter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->widget(\yii\widgets\MaskedInput::class, [
    'mask' => '99/99/9999',]); ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_dokter')->dropDownList([ 'Belum Menikah' => 'Belum Menikah', 'Menikah' => 'Menikah', 'Duda' => 'Duda', 'Janda' => 'Janda', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama_dokter')->dropDownList([ 'Islam' => 'Islam', 'Katolik' => 'Katolik', 'Protestan' => 'Protestan', 'Buddha' => 'Buddha', 'Hindu' => 'Hindu', 'Kong Hu cu' => 'Kong Hu cu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pendidikan_dokter')->dropDownList([ 'TK' => 'TK', 'SD' => 'SD', 'SMP' => 'SMP', 'SMA/SMK' => 'SMA/SMK', 'D3' => 'D3', 'D4' => 'D4', 'S1' => 'S1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nohp_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_dokter')->dropDownList([ 'Umum' => 'Umum', 'Gigi' => 'Gigi', 'Spesialis' => 'Spesialis', '' => '', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'jenis_spesialis')->dropDownList([ 'Penyakit Dalam' => 'Penyakit Dalam', 'Syaraf' => 'Syaraf', 'Jantung' => 'Jantung', 'Obgyn' => 'Obgyn', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
