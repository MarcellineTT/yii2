<?php
/**
 * Created by PhpStorm.
 * User: tanyem
 * Date: 08.04.16
 * Time: 1:57
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'name'); ?>
    <?= $form->field($model, 'email'); ?>
    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']); ?>
    </div>
<?php ActiveForm::end(); ?>
