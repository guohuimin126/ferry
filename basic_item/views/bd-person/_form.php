<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BdPerson */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bd-person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'true_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput() ?>

    <?= $form->field($model, 'id_card')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'now_tel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'now_home')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'star_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'experience')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'highest_ed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'graduate_sg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'graduate_time')->textInput() ?>

    <?= $form->field($model, 'specialty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
