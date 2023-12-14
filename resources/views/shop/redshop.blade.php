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
                                <th>Price</th>
                                <th>Name</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($card as $d)
                                <tr>
                                    <td>{{$d->id}}</td>
                                    <td>
                                        <div class="container mt-0" id="sem">
                                            <img src="{{asset('/storage/'. $d['image'])}}" style="float: left; width: 100px; height: 100px; object-fit: cover;">
                                        </div>
                                    </td>
                                    <td>{{$d->description}}</td>
                                    <td>{{$d->price}}</td>
                                    <td>{{$d->name}}</td>

                                    <td> <form method="POST" action="/createshop/{{$d->id}}">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="btn btn-danger mb-2">Delete</button>
                                        </form>
                                        <form method="get" action="/createshop/{{$d->id}}">
                                            @csrf
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
