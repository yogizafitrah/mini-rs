<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Poliklinik */

$this->title = 'Create Poliklinik';
$this->params['breadcrumbs'][] = ['label' => 'Poliklinik', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poliklinik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
