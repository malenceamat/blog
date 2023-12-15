@extends('admin')
@include('style')
<div class="main-container" id="container">
    @include('admin.sidebar')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="account-settings-container layout-top-spacing">
                            <form id="general-info" class="section general-info" action="/client" method="POST">
                                @csrf
                                <div class="info">
                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                        <div class="form">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fullName">Имя</label>
                                                        <input readonly type="text" class="form-control mb-4"
                                                               name="fullName" value="{{$data->name}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fullName">E-mail</label>
                                                        <input readonly type="text" class="form-control mb-4"
                                                               name="email" value="{{$data->email}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fullName">Цели</label>
                                                        <input readonly type="text" class="form-control mb-4"
                                                               id="fullName" value="{{$data->select}}">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fullName">Телефон</label>
                                                        <input readonly type="text" class="form-control mb-4"
                                                               id="fullName" value="{{$data->phone}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div class="info">
                                        <h5 class="">Message</h5>
                                        <div class="row">
                                            <div class="col-md-11 mx-auto">
                                                <div class="form-group">
                                                    <textarea readonly class="form-control" id="aboutBio" rows="10"
                                                              placeholder="{{$data->message}}"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container mt-3">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary mb-2">Зарегистрировать</button>
                                    </div>
                                </div>
                                <label>
                                    <input type="hidden" name="ss" value="{{$data->id}}">
                                </label>
                            </form>
                        </div>
                        <div class="as-footer-container">
                            <form method="POST" action="/reg/{{$data->id}}">
                                {{method_field('DELETE')}}
                                @csrf
                                <button class="btn btn-danger mb-2">Удалить</button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
