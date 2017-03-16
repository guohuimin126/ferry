<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BdPerson */

$this->title = $model->p_id;
$this->params['breadcrumbs'][] = ['label' => 'Bd People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bd-person-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->p_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->p_id], [
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
            'p_id',
            'true_name',
            'sex',
            'id_card',
            'now_tel',
            'now_home',
            'star_time',
            'end_time',
            'experience',
            'highest_ed',
            'graduate_sg',
            'graduate_time',
            'specialty',
            'u_id',
        ],
    ]) ?>

</div>
