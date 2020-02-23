<?php

/* @var $this yii\web\View */

$this->title = 'Kitchen';

use yii\helpers\Html; ?>

<div class="site-index">

    <div class="jumbotron">
        <h2>Найди рецепт!</h2>
        <div class="d1">
            <form>
                <input type="text" placeholder="Искать здесь...">
                <button type="submit"></button>
            </form>
        </div>

<!--        --><?//= Html::a('Специи', ['/spices/spice'], ['class'=>'btnvse']) ?>

        <div class="tab">
            <?= Html::a('Специи', ['/site/spice'], ['class'=>'tablinks']) ?>
            <button class="tablinks" onclick="openCity(event, 'Специи')">Специи</button>
            <button class="tablinks" onclick="openCity(event, 'Овощи')">Овощи</button>
            <button class="tablinks" onclick="openCity(event, 'Мясо')">Мясо</button>
        </div>
        <? $spices = [];?>
        <div id="Специи" class="tabcontent">
            <?php foreach ($spices as $spice): ?>
                <?= Html::img(Yii::getAlias('@web').'/images/'. $spice->image,
                    ['width' => '150px']);?>
            <?php endforeach; ?>
        </div>
        <div id="Овощи" class="tabcontent">
            <h3>Овощи</h3>
            <p>Берлин это столица Германии.</p>
        </div>
        <div id="Мясо" class="tabcontent">
            <h3>Мясо</h3>
            <p>Пекин это столица Китая.</p>
        </div>
    </div>

    <div class="body-content">

    </div>
</div>
