<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jadwal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jadwal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hari')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jam_mulai')->widget(\yii\widgets\MaskedInput::class, [
    'mask' => '99:99',]);?>

    <?= $form->field($model, 'jam_selesai')->widget(\yii\widgets\MaskedInput::class, [
    'mask' => '99:99',]); ?>

    <?= $form->field($model, 'id_dokter')->textInput() ?>

    <?= $form->field($model, 'id_poliklinik')->textInput() ?>

    <?= $form->field($model, 'status_jadwal')->dropDownList([ 'Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
