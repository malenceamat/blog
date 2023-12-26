@extends('site.osnova')
    <!DOCTYPE html>
@include('site.style')
<style>
    .cards {
        display: grid;
        /* Автоматически заполняем на всю ширину grid-контейнера */
        grid-template-columns: repeat(auto-fill, 225px);
        width: 100%;
        max-width: 1000px; /* Ширина grid-контейнера */
        justify-content: center;
        justify-items: center; /* Размещаем карточку по центру */
        column-gap: 30px; /* Отступ между колонками */
        row-gap: 40px; /* Отступ между рядами */
        margin: 0 auto;
    }


    .card {
        width: 225px;
        min-height: 350px;
        box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column; /* Размещаем элементы в колонку */
        border-radius: 4px;
        transition: 0.2s;
        position: relative;
    }

    /* При наведении на карточку - меняем цвет тени */
    .card:hover {
        box-shadow: 4px 8px 16px rgba(255, 102, 51, 0.2);
    }

    .card__top {
        flex: 0 0 220px; /* Задаем высоту 220px, запрещаем расширение и сужение по высоте */
        position: relative;
        overflow: hidden; /* Скрываем, что выходит за пределы */
    }

    /* Контейнер для картинки */
    .card__image {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .card__image > img {
        width: 100%;
        height: 100%;
        object-fit: contain; /* Встраиваем картинку в контейнер card__image */
        transition: 0.2s;
    }

    /* При наведении - увеличиваем картинку */
    .card__image:hover > img {
        transform: scale(1.1);
    }

    /* Размещаем скидку на товар относительно изображения */
    .card__label {
        padding: 4px 8px;
        position: absolute;
        bottom: 10px;
        left: 10px;
        background: #ff6633;
        border-radius: 4px;
        font-weight: 400;
        font-size: 16px;
        color: #fff;
    }

    .card__bottom {
        display: flex;
        flex-direction: column;
        flex: 1 0 auto; /* Занимаем всю оставшуюся высоту карточки */
        padding: 10px;
    }

    .card__prices {
        display: flex;
        margin-bottom: 10px;
        flex: 0 0 50%; /* Размещаем цены равномерно в две колонки */
    }

    .card__price::after {
        content: "₽";
        margin-left: 4px;
        position: relative;
    }

    .card__price--discount {
        font-weight: 700;
        font-size: 19px;
        color: #414141;
        display: flex;
        flex-wrap: wrap-reverse;
    }

    .card__price--discount::before {
        content: "Со скидкой";
        font-weight: 400;
        font-size: 13px;
        color: #bfbfbf;
    }

    .card__price--common {
        font-weight: 400;
        font-size: 17px;
        color: #606060;
        display: flex;
        flex-wrap: wrap-reverse;
        justify-content: flex-end;
    }

    .card__price--common::before {
        content: "Обычная";
        font-weight: 400;
        font-size: 13px;
        color: #bfbfbf;
    }

    .card__title {
        display: block;
        margin-bottom: 10px;
        font-weight: 400;
        font-size: 17px;
        line-height: 150%;
        color: #414141;
    }

    .card__title:hover {
        color: #ff6633;
    }

    .card__add {
        display: block;
        width: 100%;
        font-weight: 400;
        font-size: 17px;
        color: #70c05b;
        padding: 10px;
        text-align: center;
        border: 1px solid #70c05b;
        border-radius: 4px;
        cursor: pointer; /* Меняем курсор при наведении */
        transition: 0.2s;
        margin-top: auto; /* Прижимаем кнопку к низу карточки */
    }

    .card__add:hover {
        border: 1px solid #ff6633;
        background-color: #ff6633;
        color: #fff;
    }
</style>

<div class="light-wrapper">
    <div class="container inner">
        <div class="widget-content widget-content-area">


            <form action="#" method="POST">
                <div class="row">
                    <div class="cards">

                        <div class="card">
                            <div class="card__top">
                                <a href="#" class="card__image">
                                    <img src="./image/iphone-14-pro-max-gold.png"/></a>
                            </div>
                            <div class="card__bottom">
                                <!-- Цены на товар (с учетом скидки и без)-->
                                <div class="card__prices">
                                    <div class="card__price card__price--discount">135 000</div>
                                    <div class="card__price card__price--common">150 000</div>
                                </div>
                                <p href="#" class="card__title">
                                    Смартфон Apple IPhone 14 Pro Max 256Gb, золотой
                                </p>
                                <button class="card__add">В корзину</button>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </form>

        </div>
    </div>
</div>





