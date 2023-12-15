@extends('admin')
@include('style')
<div class="main-container" id="container">
    @include('admin.sidebar')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">


                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Имя</th>
                                <th>Телефон</th>
                                <th>Почта</th>
                                <th>Цель</th>
                                <th>Сообщение</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($table as $ma)
                                <tr>
                                    <td>{{$ma->id}}</td>
                                    <td>{{$ma->name}}</td>
                                    <td>{{$ma->phone}}</td>
                                    <td>{{$ma->email}}</td>
                                    <td>{{$ma->select}}</td>
                                    <td>{{$ma->message}}</td>
                                    <td>
                                        <div class="row">
                                            <form method="POST" action="/reg/{{$ma->id}}">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button class="btn btn-danger mb-2">Удалить</button>
                                            </form>
                                            <form method="POST" action="/edit/{{$ma->id}}">

                                                {{csrf_field()}}
                                                <button class="btn btn-primary mb-2">Подтвердить</button>
                                            </form>
                                        </div>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Имя</th>
                                <th>Телефон</th>
                                <th>Почта</th>
                                <th>Цель</th>
                                <th>Сообщение</th>
                                <th></th>
                            </tr>
                            </tfoot>
                            <form class="form-inline my-2 my-lg-0" type="get" action="{{url('/search')}}">
                                <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search">
                                <button class="btn btn-outline-light my-2 mt-sm-0" type="submit">Search</button>
                            </form>
                        </table>


                    </div>
                </div>
            </div>
        </div>


    </div>
