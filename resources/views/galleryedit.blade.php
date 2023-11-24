@extends('admin')
@include('style')
@include('admin.sidebar')


<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">


                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($names as $fotka)
                            <tr>
                                <td>{{$fotka->id}}</td>
                                <td>{{$fotka->name}}</td>
                                <td>
                                    <div class="row">
                                    <form method="POST" action="/galleryedit/{{$fotka->id}}">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button class="btn btn-danger mb-2">Delete</button>
                                    </form>
                                    <form method="POST" action="/redrazdel/{{$fotka->id}}">
                                        @csrf
                                        <button class="btn btn-primary mb-2">Edit</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
