<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SpicesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Spices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="spices-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Spices', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img(Yii::getAlias('@web').'/images/'. $data['image'],
                        ['width' => '70px']);
                },
            ],
        ],
    ]); ?>
    </div>
</div>
