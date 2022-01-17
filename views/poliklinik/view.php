<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Poliklinik */

$this->title = $model->id_poli;
$this->params['breadcrumbs'][] = ['label' => 'Poliklinik', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="poliklinik-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_poli' => $model->id_poli], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_poli' => $model->id_poli], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_poli',
            'nama_poli',
            'status_poli',
        ],
    ]) ?>

</div>
