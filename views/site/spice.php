<?php
    use yii\helpers\Html;
?>

<?php $spices =[];
foreach ($spices as $spice): ?>
    <?= Html::img(Yii::getAlias('@web').'/images/'. $spice->image,
        ['width' => '150px']);?>
<?php endforeach; ?>