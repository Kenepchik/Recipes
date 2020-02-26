<?php

/* @var $this yii\web\View */

$this->title = 'Kitchen';

use yii\helpers\Html; ?>

<div class="site-index">

    <div class="jumbotron">
        <h2>Выбери продукты, которые у тебя есть!</h2>
<!--        <div class="d1">-->
<!--            <form>-->
<!--                <input type="text" placeholder="Искать здесь...">-->
<!--                <button type="submit"></button>-->
<!--            </form>-->
<!--        </div>-->

        <div class="alf">
            <?php
            $abc_rus = array();
            foreach (range(chr(0xC0), chr(0xDF)) as $b)
            {
                $abc_rus[] = iconv('CP1251', 'UTF-8', $b);
            }
            foreach ($abc_rus as $lette_rus)
            {
                echo '<a href="/index.php?letter='.$lette_rus.'">'.$lette_rus.'</a> ';
            }
            ?>
        </div>
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'Специи')">Специи</button>
            <button class="tablinks" onclick="openCity(event, 'Овощи')">Овощи</button>
            <button class="tablinks" onclick="openCity(event, 'Мясо')">Мясо</button>
        </div>
        <div id="Специи" class="tabcontent">
            <p class="p" id="demo" onclick="myFunction(event, '1')">Аир</p>
            <p class="p" id="demo" onclick="myFunction(event, '2')">Ажгон</p>
            <p class="p" id="demo" onclick="myFunction(event, '3')">Амарант</p>
            <p class="p" id="demo" onclick="myFunction(event, '4')">Базилик</p>
            <p class="p" id="demo" onclick="myFunction()">Барбарис</p>
            <p class="p" id="demo" onclick="myFunction()">Ваниль</p>
            <p class="p" id="demo" onclick="myFunction()">Гарциния</p>
            <p class="p" id="demo" onclick="myFunction()">Гвоздика</p>
            <p class="p" id="demo" onclick="myFunction()">Горчица</p>
            <p class="p" id="demo" onclick="myFunction()">Соль</p>
            <p class="p" id="demo" onclick="myFunction()">Сахар</p>
            <p class="p" id="demo" onclick="myFunction()">Перец</p>
        </div>

        <div id="Овощи" class="tabcontent">
            <p>Авокадо</p>
            <p>Ангурия</p>
            <p>Базелла</p>
            <p>Базилик</p>
            <p>Баклажан</p>
            <p>Бамия</p>
            <p>Перец</p>
            <p>Петрушка</p>
            <p>Редька</p>
            <p>Горох</p>
            <p>Кабачок</p>
            <p>Каперсы</p>
            <p>Капуста</p>
            <p>Картофель</p>
        </div>

        <div id="Мясо" class="tabcontent">
            <p>Курица</p>
            <p>Бекон</p>
            <p>Буженина</p>
            <p>Говядина</p>
            <p>Ветчина</p>
            <p>Кролик</p>
            <p>Печень</p>
            <p>Сало</p>
        </div>
    </div>

    <div class="body-content">
    </div>
</div>
