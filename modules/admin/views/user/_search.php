<?php

use app\models\User;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solution-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'class' => ''
        ],
    ]); ?>

    <?= $form->field($model, 'id', [
        'template' => "{label}\n<div class=\"input-group\">{input}</div>",
    ])->textInput(['maxlength' => 128, 'autocomplete'=>'off', 'placeholder' => 'User ID'])->label(false) ?>

    <?= $form->field($model, 'username', [
        'template' => "{label}\n<div class=\"input-group\">{input}</div>",
    ])->textInput(['maxlength' => 128, 'autocomplete'=>'off', 'placeholder' => 'Username'])->label(false) ?>

    <?= $form->field($model, 'nickname', [
        'template' => "{label}\n<div class=\"input-group\">{input}</div>",
    ])->textInput(['maxlength' => 128, 'autocomplete'=>'off', 'placeholder' => 'Nickname'])->label(false) ?>

    <?= $form->field($model, 'email', [
        'template' => "{label}\n<div class=\"input-group\">{input}</div>",
    ])->textInput(['maxlength' => 128, 'autocomplete'=>'off', 'placeholder' => 'Email'])->label(false) ?>

    <?= $form->field($model, 'role', [
        'template' => "{label}\n<div class=\"input-group\">{input}</div>",
    ])->dropDownList([
        '' => '所有用户',
        User::ROLE_PLAYER => '参赛用户',
        User::ROLE_USER => '普通用户',
        User::ROLE_VIP => 'VIP 用户',
        User::ROLE_ADMIN => '管理员',

    ])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
