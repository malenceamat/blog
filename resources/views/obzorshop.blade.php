@extends('admin')
@include('style')
<div class="main-container" id="container">
    @include('admin.sidebar')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">




                        <input type="button" onclick="location.href='/createshop';" value="Создать карточку товара" class="btn btn-outline-primary mb-2" />
                        <input type="button" onclick="location.href='/redshop';" value="Редактировать карточку товара" class="btn btn-outline-primary mb-2" />
                        <input type="button" onclick="location.href='/redshop';" value="Настройка скидки" class="btn btn-outline-primary mb-2" />
















                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
