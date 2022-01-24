<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Categs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'zagol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pict')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
