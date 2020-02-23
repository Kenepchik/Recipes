<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Spices */

$this->title = 'Update Spices: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Spices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="spices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
