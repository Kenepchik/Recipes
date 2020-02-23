<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Spices */

$this->title = 'Create Spices';
$this->params['breadcrumbs'][] = ['label' => 'Spices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
