<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */

$this->title = 'Update Pasien: ' . $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pasien, 'url' => ['view', 'id_pasien' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
