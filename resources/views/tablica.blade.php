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
                                <th>Image</th>
                                <th>Text</th>
                                <th>Supp Text</th>
                                <th>Buttons</th>
                                <th>Text Buttons</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tablica as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>
                                        <div class="container mt-0" id="sem">
                                            <img src="{{asset('/storage/'. $data['body'])}}" style="float: left; width: 100px; height: 100px; object-fit: cover;">
                                        </div>
                                    </td>
                                    <td>{{$data->head}}</td>
                                    <td>{{$data->support}}</td>
                                    <td>{{$data->buttons}}</td>
                                    <td>{{$data->mama}}</td>
                                    <td> <form method="POST" action="/tablica/{{$data->id}}">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="btn btn-danger mb-2">Delete</button>
                                        </form>
                                        <form method="POST" action="/edit/{{$data->id}}">
                                            {{csrf_field()}}
                                            <button class="btn btn-primary mb-2">Edit</button>
                                        </form>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


