<?php

/* @var $this yii\web\View */
/* @var $model app\models\MessageForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <?php $form = ActiveForm::begin([
            'id' => 'input-form',
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n<div class='col-lg-3'>{input}</div>\n<div class='col-lg-8'>{error}</div>",
                'labelOptions' => ['class' => 'col-lg-1 control-label']
            ]
        ]); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'message')->textarea() ?>

        <?php ActiveForm::end(); ?>

    </div>
</div>
