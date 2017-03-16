<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BdPersonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bd-person-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'p_id') ?>

    <?= $form->field($model, 'true_name') ?>

    <?= $form->field($model, 'sex') ?>

    <?= $form->field($model, 'id_card') ?>

    <?= $form->field($model, 'now_tel') ?>

    <?php // echo $form->field($model, 'now_home') ?>

    <?php // echo $form->field($model, 'star_time') ?>

    <?php // echo $form->field($model, 'end_time') ?>

    <?php // echo $form->field($model, 'experience') ?>

    <?php // echo $form->field($model, 'highest_ed') ?>

    <?php // echo $form->field($model, 'graduate_sg') ?>

    <?php // echo $form->field($model, 'graduate_time') ?>

    <?php // echo $form->field($model, 'specialty') ?>

    <?php // echo $form->field($model, 'u_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
