<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Poliklinik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poliklinik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_poli')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_poli')->dropDownList([ 'Aktif' => 'Aktif', 'Tidak Aktif' => 'Tidak Aktif', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
