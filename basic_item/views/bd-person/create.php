<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BdPerson */

$this->title = 'Create Bd Person';
$this->params['breadcrumbs'][] = ['label' => 'Bd People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bd-person-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
