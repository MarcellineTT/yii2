<?php
/**
 * Created by PhpStorm.
 * User: tanyem
 * Date: 08.04.16
 * Time: 1:51
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>
<ul>
    <li><label>Name</label>: <?= Html::encode($model->name);?></li>
    <li><label>Email</label>: <?= Html::encode($model->email);?></li>
</ul>
