<?php

/**
 * @var yeesoft\widgets\ActiveForm $form
 * @var yeesoft\models\AuthRole $model
 */
use yeesoft\helpers\Html;
use yeesoft\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>

<div class="row">
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-body">
                <?= $form->field($model, 'description')->textInput(['maxlength' => 255, 'autofocus' => $model->isNewRecord ? true : false]) ?>

                <?php if ($model->isNewRecord): ?>
                    <?= $form->field($model, 'name')->slugInput(['maxlength' => 64], 'description') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <?php if ($model->isNewRecord): ?>
                        <div class="col-md-6">
                            <?= Html::submitButton(Yii::t('yee', 'Create'), ['class' => 'btn btn-primary btn-block']) ?>
                        </div>
                        <div class="col-md-6">
                            <?= Html::a(Yii::t('yee', 'Cancel'), ['index'], ['class' => 'btn btn-default btn-block']) ?>
                        </div>
                    <?php else: ?>
                        <div class="col-md-12">
                            <?= $form->field($model, 'name')->value() ?>
                        </div>
                        <div class="col-md-6">
                            <?= Html::submitButton(Yii::t('yee', 'Save'), ['class' => 'btn btn-primary btn-block']) ?>
                        </div>
                        <div class="col-md-6">
                            <?=
                            Html::a(Yii::t('yee', 'Delete'), ['delete', 'id' => $model->name], [
                                'class' => 'btn btn-default btn-block',
                                'data' => [
                                    'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                    'method' => 'post',
                                ],
                            ])
                            ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>