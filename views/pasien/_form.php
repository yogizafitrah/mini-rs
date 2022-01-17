<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rekam_medis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'panggilan_pasien')->dropDownList([ 'Tn' => 'Tn', 'Ny' => 'Ny', 'Nn' => 'Nn', 'An' => 'An', 'By' => 'By', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jk_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgllahir_pasien')->widget(\yii\widgets\MaskedInput::class, [
    'mask' => '99/99/9999',]); ?>

    <?= $form->field($model, 'tempatlahir_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_pasien')->dropDownList([ 'Belum Menikah' => 'Belum Menikah', 'Menikah' => 'Menikah', 'Duda' => 'Duda', 'Janda' => 'Janda', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama_pasien')->dropDownList([ 'Islam' => 'Islam', 'Katolik' => 'Katolik', 'Protestan' => 'Protestan', 'Hindu' => 'Hindu', 'Buddha' => 'Buddha', 'Kong Hu Cu' => 'Kong Hu Cu', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pendidikan_pasien')->dropDownList([ 'TK' => 'TK', 'SD' => 'SD', 'SMP' => 'SMP', 'SMA/SMK' => 'SMA/SMK', 'D3' => 'D3', 'D4' => 'D4', 'S1' => 'S1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'alamat_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nohp_pasien')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
